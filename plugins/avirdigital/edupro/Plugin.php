<?php namespace Avirdigital\Edupro;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
        return [
            'Avirdigital\Edupro\Components\CourseComponent' => 'Course',
            'Avirdigital\Edupro\Components\PartnerComponent' => 'Partner',
            'Avirdigital\Edupro\Components\HomeComponent' => 'Home',
            'Avirdigital\Edupro\Components\StudentComponent' => 'Student',
            'Avirdigital\Edupro\Components\AboutComponent' => 'About',
            'Avirdigital\Edupro\Components\ContactComponent' => 'Contact',
            'Avirdigital\Edupro\Components\ApplyComponent' => 'Apply',
        ];
    }

    public function registerFormWidgets()
    {
        return [

            'Avirdigital\Edupro\FormWidgets\ContactFormWidget' => [
                'label' => 'Contact',
                'code' => 'contact'
            ],
            'Avirdigital\Edupro\FormWidgets\ApplyFormWidget' => [
                'label' => 'Apply',
                'code' => 'apply'
            ],
    ];
    }

    public function registerSettings()
    {
    }

    public function boot()
    {
        \Event::listen('offline.sitesearch.query', function ($query) {

            // Search your plugin's contents
            $items = Models\Course::where('name', 'like', "%${query}%")
                ->orWhere('description', 'like', "%${query}%")
                ->get();

            // Now build a results array
            $results = $items->map(function ($item) use ($query) {

                // If the query is found in the title, set a relevance of 2
                $relevance = mb_stripos($item->title, $query) !== false ? 2 : 1;

                // Optional: Add an age penalty to older results. This makes sure that
                // newer results are listed first.
                // if ($relevance > 1 && $item->published_at) {
                //     $relevance -= $this->getAgePenalty($item->published_at->diffInDays(Carbon::now()));
                // }

                return [
                    'title'     => $item->name,
                    'text'      => $item->description,
                    'url'       => '/course/detail/' . $item->slug,
//                    'thumb'     => $item->logo->first(), // Instance of System\Models\File
                    'relevance' => $relevance, // higher relevance results in a higher
                    // position in the results listing
                    // 'meta' => 'data',       // optional, any other information you want
                    // to associate with this result
                    // 'model' => $item,       // optional, pass along the original model
                ];
            });

            return [
                'provider' => 'Course', // The badge to display for this result
                'results'  => $results,
            ];
        });
    }
}

<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\File;

class BlogSearch extends Component
{
    // Property to store the search query
    public $query = '';

    // Property to store the filtered blogs
    public $blogs = [];

    // Method to trigger search when query is updated
    public function updatedQuery()
    {
        $this->searchBlogs();
    }

    // Method to search blogs based on the query
    public function searchBlogs()
    {
        // Specify the path to the JSON file in the public directory
        $path = public_path('data/blogs.json');

        // Read the file and decode the JSON data
        if (File::exists($path)) {
            $blogs = json_decode(File::get($path), true);
        } else {
            $blogs = [];
        }

        // Filter blogs based on the query
        if ($this->query) {
            $this->blogs = array_filter($blogs, function($blog) {
                return stripos($blog['title'], $this->query) !== false || stripos($blog['body'], $this->query) !== false;
            });
        } else {
            // If query is empty, display all blogs
            $this->blogs = $blogs;
        }
    }

    // Method to render the Livewire component
    public function render()
    {
        // Call the searchBlogs method to perform initial search
        $this->searchBlogs();

        // Render the Livewire component view
        return view('livewire.blog-search');
    }
}

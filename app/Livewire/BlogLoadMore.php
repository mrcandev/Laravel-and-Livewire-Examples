<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\File;

class BlogLoadMore extends Component
{
    // Properties to store blog data and control pagination
    public $blogs = []; // Array to hold loaded blogs
    public $totalBlogs = 0; // Total number of blogs in the JSON file
    public $perPage = 5; // Number of blogs to load per page
    public $loadedBlogsCount = 0; // Number of blogs currently loaded

    // Method to load more blogs when the load more button is clicked
    public function loadMore()
    {
        // Increment the number of loaded blogs
        $this->loadedBlogsCount += $this->perPage;

        // Call the searchBlogs method to update the loaded blogs
        $this->searchBlogs();
    }

    // Method to search and load blogs from the JSON file
    public function searchBlogs()
    {
        // Path to the JSON file containing blog data
        $path = public_path('data/blogs.json');

        // Check if the file exists
        if (File::exists($path)) {
            // Read the JSON file and decode its contents into an associative array
            $blogs = json_decode(File::get($path), true);
        } else {
            // If the file does not exist, initialize an empty array
            $blogs = [];
        }

        // Slice the array to get the subset of blogs based on the number of loaded blogs
        $this->blogs = array_slice($blogs, 0, $this->loadedBlogsCount + $this->perPage);

        // Update the total number of blogs
        $this->totalBlogs = count($blogs);
    }

    // Method to render the Livewire component
    public function render()
    {
        // Call the searchBlogs method to load initial blogs
        $this->searchBlogs();

        // Render the Livewire component view
        return view('livewire.blog-load-more');
    }
}

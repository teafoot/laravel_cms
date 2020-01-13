<?php
    
    use App\Category;
    use App\Post;
    use App\Tag;
    use App\User;
    use Illuminate\Database\Seeder;
    use Illuminate\Support\Facades\Hash;
    
    class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $author1 = User::create([
            "name" => "John",
            "email" => "john@gmail.com",
            "password" => Hash::make("1234")
        ]);
        $author2 = User::create([
            "name" => "Jane",
            "email" => "jane@gmail.com",
            "password" => Hash::make("1234")
        ]);
        $author3 = User::create([
            "name" => "Jake",
            "email" => "jake@gmail.com",
            "password" => Hash::make("1234")
        ]);
//        $author4 = User::create([
//            "name" => "Sarah",
//            "email" => "sarah@gmail.com",
//            "password" => Hash::make("1234")
//        ]);
        
        $category1 = Category::create([
           "name" => "News"
        ]);
        $category2 = Category::create([
           "name" => "Marketing"
        ]);
        $category3 = Category::create([
            "name" => "Design"
        ]);
//        $category4 = Category::create([
//            "name" => "Hiring"
//        ]);
        
        $post1 = Post::create([
            "title" => "We relocated our office to a new designed garage",
            "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            "content" => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            "image" => "posts/1.jpg",
            "user_id" => $author1->id,
            "category_id" => $category1->id
        ]);
        $post2 = $author2->posts()->create([
            "title" => "Top 5 brilliant content marketing strategies",
            "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            "content" => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            "image" => "posts/2.jpg",
            "category_id" => $category2->id
        ]);
        $post3 = $category3->posts()->create([
            "title" => "Best practices for minimalist design with example",
            "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
            "content" => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
            "image" => "posts/3.jpg",
            "user_id" => $author3->id
        ]);
//        $post4 = Post::create([
//            "title" => "Congratulate and thank to Maryam for joining our team",
//            "description" => "Lorem Ipsum is simply dummy text of the printing and typesetting industry.",
//            "content" => "Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.",
//            "image" => "posts/4.jpg",
//            "user_id" => $author4->id,
//            "category_id" => $category4->id
//        ]);
        
        $tag1 = Tag::create([
           "name" => "Job"
        ]);
        $tag2 = Tag::create([
           "name" => "Customers"
        ]);
        $tag3 = Tag::create([
            "name" => "Record"
        ]);
        $tag4 = Tag::create([
            "name" => "Freebie"
        ]);
        
        $post1->tags()->attach([$tag1->id, $tag2->id]);
        $post2->tags()->attach([$tag2->id, $tag3->id]);
        $post3->tags()->attach([$tag3->id, $tag4->id]);
//        $post4->tags()->attach([$tag4->id, $tag1->id]);
    }
}

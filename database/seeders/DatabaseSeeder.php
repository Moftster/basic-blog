<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Category::truncate();
        Post::truncate();

        $user = User::factory()->create();

        $personal = Category::create([
            'name' => 'Personal',
            'slug' => 'personal',
        ]);

        $family = Category::create([
            'name' => 'Family',
            'slug' => 'family',
        ]);

        $work = Category::create([
            'name' => 'Work',
            'slug' => 'work',
        ]);

        Post::create([
            'title' => 'My Family Post',
            'user_id' => $user->id,
            'category_id' => $personal->id,
            'slug' => 'my-first-post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut quod ipsum pariatur quasi cupiditate nisi reiciendis deserunt temporibus harum eveniet?',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo aliquid consequuntur eum, voluptates, dicta ad enim eligendi, perspiciatis veritatis facere tempore unde et accusamus vero! Nam possimus vero labore necessitatibus adipisci voluptatum soluta aspernatur voluptatem a nisi quos laboriosam repudiandae nostrum, rerum repellendus debitis! Eos cum consequatur et repellendus dolor, nobis blanditiis, dolorum laborum fugit tempora enim veritatis fuga, at beatae velit! Praesentium fugiat dolorum a expedita facilis libero voluptatibus! Corrupti velit unde facere quidem optio dolor. Magnam ea, necessitatibus qui exercitationem illum placeat ipsum dolores cupiditate tenetur debitis quasi optio laudantium sequi accusamus! Minus quos hic nihil, libero possimus doloremque cum pariatur voluptates reiciendis. Reiciendis fugiat totam quisquam adipisci minus atque consequuntur sit mollitia! Ullam tempora fugit illo commodi facilis odio repellendus soluta nobis eius excepturi iure perspiciatis, saepe error. Commodi doloribus cumque voluptatem. Animi optio impedit ut illum, iure eveniet nihil quos voluptate debitis architecto dolores id error possimus voluptatum quod! Tempora, commodi? Veritatis quibusdam qui officiis et laboriosam! Magni suscipit, quaerat earum nostrum sunt accusamus distinctio totam hic facere recusandae unde asperiores et voluptas quam laborum labore enim autem velit, dignissimos laudantium amet facilis voluptates quo natus! Enim quisquam ea fugiat excepturi odio ad natus amet eligendi? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut quod ipsum pariatur quasi cupiditate nisi reiciendis deserunt temporibus harum eveniet?',
        ]);

        Post::create([
            'title' => 'My 2 Post',
            'user_id' => $user->id,
            'category_id' => $family->id,
            'slug' => 'my-second-post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut quod ipsum pariatur quasi cupiditate nisi reiciendis deserunt temporibus harum eveniet?',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo aliquid consequuntur eum, voluptates, dicta ad enim eligendi, perspiciatis veritatis facere tempore unde et accusamus vero! Nam possimus vero labore necessitatibus adipisci voluptatum soluta aspernatur voluptatem a nisi quos laboriosam repudiandae nostrum, rerum repellendus debitis! Eos cum consequatur et repellendus dolor, nobis blanditiis, dolorum laborum fugit tempora enim veritatis fuga, at beatae velit! Praesentium fugiat dolorum a expedita facilis libero voluptatibus! Corrupti velit unde facere quidem optio dolor. Magnam ea, necessitatibus qui exercitationem illum placeat ipsum dolores cupiditate tenetur debitis quasi optio laudantium sequi accusamus! Minus quos hic nihil, libero possimus doloremque cum pariatur voluptates reiciendis. Reiciendis fugiat totam quisquam adipisci minus atque consequuntur sit mollitia! Ullam tempora fugit illo commodi facilis odio repellendus soluta nobis eius excepturi iure perspiciatis, saepe error. Commodi doloribus cumque voluptatem. Animi optio impedit ut illum, iure eveniet nihil quos voluptate debitis architecto dolores id error possimus voluptatum quod! Tempora, commodi? Veritatis quibusdam qui officiis et laboriosam! Magni suscipit, quaerat earum nostrum sunt accusamus distinctio totam hic facere recusandae unde asperiores et voluptas quam laborum labore enim autem velit, dignissimos laudantium amet facilis voluptates quo natus! Enim quisquam ea fugiat excepturi odio ad natus amet eligendi? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut quod ipsum pariatur quasi cupiditate nisi reiciendis deserunt temporibus harum eveniet?',
        ]);

        Post::create([
            'title' => 'My Work Post',
            'user_id' => $user->id,
            'category_id' => $work->id,
            'slug' => 'my-third-post',
            'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut quod ipsum pariatur quasi cupiditate nisi reiciendis deserunt temporibus harum eveniet?',
            'content' => 'Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo aliquid consequuntur eum, voluptates, dicta ad enim eligendi, perspiciatis veritatis facere tempore unde et accusamus vero! Nam possimus vero labore necessitatibus adipisci voluptatum soluta aspernatur voluptatem a nisi quos laboriosam repudiandae nostrum, rerum repellendus debitis! Eos cum consequatur et repellendus dolor, nobis blanditiis, dolorum laborum fugit tempora enim veritatis fuga, at beatae velit! Praesentium fugiat dolorum a expedita facilis libero voluptatibus! Corrupti velit unde facere quidem optio dolor. Magnam ea, necessitatibus qui exercitationem illum placeat ipsum dolores cupiditate tenetur debitis quasi optio laudantium sequi accusamus! Minus quos hic nihil, libero possimus doloremque cum pariatur voluptates reiciendis. Reiciendis fugiat totam quisquam adipisci minus atque consequuntur sit mollitia! Ullam tempora fugit illo commodi facilis odio repellendus soluta nobis eius excepturi iure perspiciatis, saepe error. Commodi doloribus cumque voluptatem. Animi optio impedit ut illum, iure eveniet nihil quos voluptate debitis architecto dolores id error possimus voluptatum quod! Tempora, commodi? Veritatis quibusdam qui officiis et laboriosam! Magni suscipit, quaerat earum nostrum sunt accusamus distinctio totam hic facere recusandae unde asperiores et voluptas quam laborum labore enim autem velit, dignissimos laudantium amet facilis voluptates quo natus! Enim quisquam ea fugiat excepturi odio ad natus amet eligendi? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ut quod ipsum pariatur quasi cupiditate nisi reiciendis deserunt temporibus harum eveniet?',
        ]);
    }
}

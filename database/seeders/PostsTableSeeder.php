<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('posts')->insert([
            [
                'id' => 1,
                'title' => 'Where does it come from?',
                'slug' => 'where-does-it-come-from',
                'summary' => '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">Contrary to popular belief, Lorem Ipsum is not simply random text.&nbsp;</span><br></p>',
                'description' => '<h2 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;">What is Lorem Ipsum?</h2><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;"><strong style="margin: 0px; padding: 0px;">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;"><strong style="margin: 0px; padding: 0px;">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>',
                'quote' => '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested.</span><br></p>',
                'photo' => '/storage/photos/1/Blog/blog1.jpg',
                'tags' => '2020,Visit nepal 2020',
                'post_cat_id' => 1,
                'post_tag_id' => NULL,
                'added_by' => 2,
                'status' => 'active',
                'created_at' => Carbon::create('2020', '08', '14', '01', '55', '55'),
                'updated_at' => Carbon::create('2020', '08', '14', '04', '29', '56'),
            ],
            [
                'id' => 2,
                'title' => 'Where can I get some?',
                'slug' => 'where-can-i-get-some',
                'summary' => '<h2 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;"><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">It is a long established fact that a reader</span><br></h2>',
                'description' => '<h2 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 24px; font-size: 24px; padding: 0px; font-family: DauphinPlain;">Why do we use it?</h2><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p><h2 style="margin-right: 0px; margin-bottom: 10px; margin-left: 0px; line-height: 24px; font-size: 24px; padding: 0px; font-family: DauphinPlain;">Why do we use it?</h2><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>',
                'quote' => NULL,
                'photo' => '/storage/photos/1/Blog/blog2.jpg',
                'tags' => 'Enjoy',
                'post_cat_id' => 2,
                'post_tag_id' => NULL,
                'added_by' => 1,
                'status' => 'active',
                'created_at' => Carbon::create('2020', '08', '14', '01', '58', '52'),
                'updated_at' => Carbon::create('2020', '08', '14', '07', '08', '14'),
            ],
            [
                'id' => 3,
                'title' => 'The standard Lorem Ipsum passage, used since the 1500s',
                'slug' => 'the-standard-lorem-ipsum-passage-used-since-the-1500s',
                'summary' => '<p><span style="font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;">"Lorem ipsum dolor sit amet, consectetur adipiscing elit,</span><br></p>',
                'description' => '<h3 style="margin: 15px 0px; padding: 0px; font-weight: 700; font-size: 14px; font-family: &quot;Open Sans&quot;, Arial, sans-serif;">1914 translation by H. Rackham</h3><p style="margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;">"But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure...</p>',
                'quote' => NULL,
                'photo' => '/storage/photos/1/Blog/blog3.jpg',
                'tags' => '',
                'post_cat_id' => 3,
                'post_tag_id' => NULL,
                'added_by' => 3,
                'status' => 'active',
                'created_at' => Carbon::create('2020', '08', '14', '02', '59', '33'),
                'updated_at' => Carbon::create('2020', '08', '14', '04', '29', '44'),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NotificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $notifications = [
            ['2145a8e3-687d-444a-8873-b3b2fb77a342', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{"title":"New Comment created","actionURL":"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some","fas":"fas fa-comment"}', NULL, '2020-08-15 07:31:21', '2020-08-15 07:31:21'],
            ['3af39f84-cab4-4152-9202-d448435c67de', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{"title":"New order created","actionURL":"http:\\/\\/localhost:8000\\/admin\\/order\\/4","fas":"fa-file-alt"}', NULL, '2020-08-15 07:54:52', '2020-08-15 07:54:52'],
            ['4a0afdb0-71ad-4ce6-bc70-c92ef491a525', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{"title":"New Comment created","actionURL":"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage-used-since-the-1500s","fas":"fas fa-comment"}', NULL, '2020-08-17 21:13:51', '2020-08-17 21:13:51'],
            ['540ca3e9-0ff9-4e2e-9db3-6b5abc823422', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{"title":"New Comment created","actionURL":"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some","fas":"fas fa-comment"}', '2020-08-15 07:30:44', '2020-08-14 07:12:28', '2020-08-15 07:30:44'],
            ['5da09dd1-3ffc-43b0-aba2-a4260ba4cc76', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{"title":"New Comment created","actionURL":"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage","fas":"fas fa-comment"}', NULL, '2020-08-15 07:51:02', '2020-08-15 07:51:02'],
            ['5e91e603-024e-45c5-b22f-36931fef0d90', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{"title":"New Product Rating!","actionURL":"http:\\/\\/localhost:8000\\/product-detail\\/white-sports-casual-t","fas":"fa-star"}', NULL, '2020-08-15 07:44:07', '2020-08-15 07:44:07'],
            ['73a3b51a-416a-4e7d-8ca2-53b216d9ad8e', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{"title":"New Comment created","actionURL":"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some","fas":"fas fa-comment"}', NULL, '2020-08-14 07:11:03', '2020-08-14 07:11:03'],
            ['8605db5d-1462-496e-8b5f-8b923d88912c', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{"title":"New order created","actionURL":"http:\\/\\/e-shop.loc\\/admin\\/order\\/1","fas":"fa-file-alt"}', NULL, '2020-08-14 07:20:44', '2020-08-14 07:20:44'],
            ['a6ec5643-748c-4128-92e2-9a9f293f53b5', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{"title":"New order created","actionURL":"http:\\/\\/localhost:8000\\/admin\\/order\\/5","fas":"fa-file-alt"}', NULL, '2020-08-17 21:17:03', '2020-08-17 21:17:03'],
            ['b186a883-42f2-4a05-8fc5-f0d3e10309ff', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{"title":"New order created","actionURL":"http:\\/\\/e-shop.loc\\/admin\\/order\\/2","fas":"fa-file-alt"}', '2020-08-15 04:17:24', '2020-08-14 22:14:55', '2020-08-15 04:17:24'],
            ['d2fd7c33-b0fe-47d6-8bc6-f377d404080d', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{"title":"New Comment created","actionURL":"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some","fas":"fas fa-comment"}', NULL, '2020-08-14 07:08:50', '2020-08-14 07:08:50'],
            ['dff78b90-85c8-42ee-a5b1-de8ad0b21be4', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{"title":"New order created","actionURL":"http:\\/\\/e-shop.loc\\/admin\\/order\\/3","fas":"fa-file-alt"}', NULL, '2020-08-15 06:40:54', '2020-08-15 06:40:54'],
            ['e28b0a73-4819-4016-b915-0e525d4148f5', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{"title":"New Product Rating!","actionURL":"http:\\/\\/localhost:8000\\/product-detail\\/lorem-ipsum-is-simply","fas":"fa-star"}', NULL, '2020-08-17 21:08:16', '2020-08-17 21:08:16'],
            ['ffffa177-c54e-4dfe-ba43-27c466ff1f4b', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{"title":"New Comment created","actionURL":"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage-used-since-the-1500s","fas":"fas fa-comment"}', NULL, '2020-08-17 21:13:29', '2020-08-17 21:13:29'],
        ];

        foreach ($notifications as $notification) {
            DB::table('notifications')->insert([
                'id' => $notification[0],
                'type' => $notification[1],
                'notifiable_type' => $notification[2],
                'notifiable_id' => $notification[3],
                'data' => $notification[4],
                'read_at' => $notification[5],
                'created_at' => Carbon::createFromFormat('Y-m-d H:i:s', $notification[6]),
                'updated_at' => Carbon::createFromFormat('Y-m-d H:i:s', $notification[7]),
            ]);
        }
    }
}

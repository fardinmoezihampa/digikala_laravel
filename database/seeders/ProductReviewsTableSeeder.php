<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductReviewsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {


        \DB::table('product_reviews')->delete();

        \DB::table('product_reviews')->insert(array (
            0 =>
            array (
                'id' => 17,
                'title' => 'در کل، Galaxy S24 Ultra به عنوان یکی از بهترین گوشی‌های اندرویدی شناخته می‌شود ',
                'comment' => 'گوشی موبایل سامسونگ مدل Galaxy S24 Ultra به عنوان یک پرچمدار، از نظر کیفیت دوربین، باتری و طراحی بسیار مورد تحسین قرار گرفته است. کاربران از هوش مصنوعی و قابلیت‌های آن به ویژه در ویرایش عکس‌ها و کار با قلم S Pen ابراز رضایت کرده‌اند.  ',
                'positive' => 'کیفیت دوربین عالی,طراحی و صفحه نمایش تخت,عملکرد هوش مصنوعی و S Pen',
                'negative' => 'مشکلات رجیستری,عدم وجود شارژر در بسته‌بندی',
                'rating' => NULL,
                'status' => 'approved',
                'product_id' => 5,
                'user_id' => 2,
                'deleted_at' => NULL,
                'created_at' => '2025-08-19 17:04:53',
                'updated_at' => '2025-08-19 17:04:53',
            ),
            1 =>
            array (
                'id' => 18,
                'title' => 'عالییییییییییییی...',
                'comment' => 'برای کارهای روزمره مناسب هست ولی برای کارهای حرفه ای نه.',
                'positive' => 'دوربین خوب,قیمت مناسب,کیفیفت عالی,سبک',
                'negative' => 'باطری ضعیف,lcd نامناسب',
                'rating' => NULL,
                'status' => 'approved',
                'product_id' => 5,
                'user_id' => 3,
                'deleted_at' => NULL,
                'created_at' => '2025-08-19 17:42:58',
                'updated_at' => '2025-08-19 17:42:58',
            ),
        ));


    }
}

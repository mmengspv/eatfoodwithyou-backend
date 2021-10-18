<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Category::factory(5)->create();
        $category = new Category();
        $category->name = "อาหารไทย";
        $category->save();

        $category = new Category();
        $category->name = "ของหวาน";
        $category->save();

        $category = new Category();
        $category->name = "อาหารทะเล";
        $category->save();

        $category = new Category();
        $category->name = "อาหารเจ";
        $category->save();

        $category = new Category();
        $category->name = "อาหารคลีน";
        $category->save();

        $category = new Category();
        $category->name = "อาหารเกาหลี";
        $category->save();

        $category = new Category();
        $category->name = "อาหารญี่ปุ่น";
        $category->save();

        $category = new Category();
        $category->name = "ไม่ใส่เนื้อหมู";
        $category->save();

        $category = new Category();
        $category->name = "อาหารจานเดียว";
        $category->save();

        $category = new Category();
        $category->name = "เมนูเส้น";
        $category->save();

        $category = new Category();
        $category->name = "เมนูทำง่ายๆที่บ้าน";
        $category->save();

        $category = new Category();
        $category->name = "เมนูผัด";
        $category->save();

        $category = new Category();
        $category->name = "เมนูทอด";
        $category->save();

        $category = new Category();
        $category->name = "อาหารจีน";
        $category->save();

        $category = new Category();
        $category->name = "เมนูต้ม";
        $category->save();

        $category = new Category();
        $category->name = "ยำ";
        $category->save();

        $category = new Category();
        $category->name = "อาหารอื่น ๆ";
        $category->save();
    }
}

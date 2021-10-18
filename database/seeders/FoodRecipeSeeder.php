<?php

namespace Database\Seeders;

use App\Models\CookingProcess;
use App\Models\FoodRecipe;
use App\Models\Ingredient;
use Illuminate\Database\Seeder;

class FoodRecipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FoodRecipe::factory(10)->hasIngredients(4)->hasCookingProcesses(4)->hasLikes(2)->hasComments(2)->create();
//        FoodRecipe::factory(10)->hasIngredients(3)->hasCookingProcesses(5)->create();
        $foodRecipe = new FoodRecipe();
        $foodRecipe->name = "ผัดหมูเกาหลี";
        $foodRecipe->detail = "หมูพัดผริกเกาหลี อร่อยได้ที่ครัวไทย";
        $foodRecipe->user_id = 17;
        $foodRecipe->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "หมักหมูที่หันบาง ด้วยซอสหมักเกาหลี 2ช้อน เติมซอสเค็มตามใจชอบ หันต้นหอมยาวพอดีคำ ซอยหัวหอมใหญ่พอดีคำ";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "ตั้งกระทะพอร้อนใส่น้ำมันนิดหน่อย ไม่ให้ติดกระทะ ลงกระเทียมหันหยาบลงในกระทะพอเหลือง ใส่หมูที่หมักซอสลงไปในกระทะ";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "ลงหมูพอสุขแล้วใส่พักลงตามทั้งหมด แล้วใส่พริกโกชูจังลงไป3ช้อน คลุกให้ทเข้ากันแล้วปรุงรสเค็มนิดหน่อยตามใจชอบ พักสุกแล้วตักขึ้นแล้วโรยงาขาว";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "เนื้อหมูสไลด์บาง";
        $ingredient1->quantity = 500;
        $ingredient1->unit = "กรัม";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "พริกโกชูจัง";
        $ingredient1->quantity = 2;
        $ingredient1->unit = "ช้อนโต๊ะ";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "ต้นหอม";
        $ingredient1->quantity = 2;
        $ingredient1->unit = "ช้อนโต๊ะ";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "หัวหอมใหญ่";
        $ingredient1->quantity = 1;
        $ingredient1->unit = "หัว";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "ซอสเกาหลีหมัก";
        $ingredient1->quantity = 2;
        $ingredient1->unit = "ช้อนโต๊ะ";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "ซอสปรุงรสเค็ม(ซีอิ้ว)";
        $ingredient1->quantity = 2;
        $ingredient1->unit = "ช้อนโต๊ะ";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "กระเทียม";
        $ingredient1->quantity = 3;
        $ingredient1->unit = "กลีบ";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();
//        --------------------
        $foodRecipe = new FoodRecipe();
        $foodRecipe->name = "แกงกะหรี่ทงคัตสึ";
        $foodRecipe->detail = "หมูทงคัตสึทำเองค่า แต่แกงกะหรี่มีตัวช่วย";
        $foodRecipe->user_id = 8;
        $foodRecipe->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "หมักหมูด้วยคนอร์ปรุงรสซอสขวดไว้";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "นำหมูที่หมักไว้ ชุบแป้ง ชุบไข่ ชุบเกล็ดขนมปัง";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "พร้อมทอด";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "ตั้งกระทะ ไฟอ่อนใส่น้ำมัน เมื่อน้ำมันร้อน ก็เอาหมูลงไปทอด ให้สุก เหลือง";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "อุ่นแกงกะหรี่พร้อมทาน";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "เทแกงกะหรี่ใส่จาน ใส่หมูทงคัตสึ ลงไป แอบแถม ไส้กรอกแฮมด้วยค่า";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "เนื้อหมู";
        $ingredient1->quantity = 500;
        $ingredient1->unit = "กรัม";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "แป้งทอดกรอบ";
        $ingredient1->quantity = 2;
        $ingredient1->unit = "ถ้วย";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "ไข่ไก่";
        $ingredient1->quantity = 2;
        $ingredient1->unit = "ฟอง";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "แป้งทอดกรอบ";
        $ingredient1->quantity = 1;
        $ingredient1->unit = "ถุง";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "แกงกะหรี่พร้อมทาน";
        $ingredient1->quantity = 1;
        $ingredient1->unit = "ซอง";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "ซอสปรุงรสเค็ม(ซีอิ้ว)";
        $ingredient1->quantity = 2;
        $ingredient1->unit = "ช้อนโต๊ะ";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();


//        --------------------

        $foodRecipe = new FoodRecipe();
        $foodRecipe->name = "เส้นเล็กต้มยำ";
        $foodRecipe->detail = "เส้นเล็กต้มยำสูตรโบราณ เครื่องแน่นอร่อยครบเครื่อง";
        $foodRecipe->user_id = 19;
        $foodRecipe->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "เอาน้ำใส่หม้อ แล้วนำไปต้มน้ำให้เดือดนะเอากระดูกหมูล้างให้สะอาดใส่หม้อ ตามด้วยรากผักชี กระเทียม พริกไทย และเกลือ ถ้ามีน้ำตาลกรวดใส่ไปนิดหน่อยและใส่กระเทียมดอง พร้อมน้ำกระเทียมดองนะคะ แล้วต้มต่อไป คอยช้อนฟองออกน้ำซุปเราจะได้ใส ต้มไปประมาณ 1 ชั่วโมงครึ่ง";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "เอาถั่วลิสงมาคั่ว ลอกเปลือกออกแล้วก็ใส่ครกตำ ถั่วแนะนำว่าทำแต่พอทาน ถ้าทำเยอะเหลือเก็บไว้จะเหม็นหืนต้องทิ้งเสียของเปล่า ๆ นะ ทำแต่พอทานในมื้อที่เราจะทำ หอมมากเวลาตำ";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "แล้วก็มาเจียวกากหมูกระเทียมหอม ๆ กรอบ ๆ กัน ตาเอาหมูสามชั้นมาเจียวในกระทะจนได้น้ำมันหมูก่อน แล้วค่อยเอาน้ำมันหมูมาเจียวกระเทียมให้เหลือง แล้วก็เอาหมูกรอบลงทอดรวมกัน อร่อยดี";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "แล้วก็นำหมูสับมาลวก ใช้ใส่หม้อเล็ก ๆ หรือถ้วยก็ได้ แล้วตักน้ำซุปที่ต้มไส้ไว้เดือด ๆ มาใส่ในหมูแล้วก็คน ๆ ให้หมูสุก รินน้ำออก พักไว้ก่อน ต่อมาก็ทอดแผ่นเกี๊ยว ลวกลูกชิ้น หั่นหมูชิ้นเตรียมไว้ หั่นฮือก้วย ตับ และไส้อ่อน เตรียมไว้ด้วย แล้วแต่ชอบเลยทุกอย่างพร้อม เรามาทำก๋วยเตี๋ยวหมูต้มยำกันเลำ";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "คราวนี้ปรุงน้ำต้มยำใส่ก๋วยเตี๋ยวกันดีกว่า นำถ้วยหรืออ่างผสมเล็ก ๆ มาใส่หมูบดที่ลวก ใส่ถั่วลิสงตำคั่วแล้วลงไป";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();


        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "ปรุงรสต่างๆ";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();


        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "เติมน้ำซุปที่เราเตรียมไว้ ไปผสมกับเส้น โรยต้นหอม ผักชี";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "น้ำเปล่า";
        $ingredient1->quantity = 1;
        $ingredient1->unit = "หม้อ";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "กระดูกหมู";
        $ingredient1->quantity = 500;
        $ingredient1->unit = "กรัม";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "รากผักชี";
        $ingredient1->quantity = 3;
        $ingredient1->unit = "ราก";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "กระเทียม";
        $ingredient1->quantity = 1;
        $ingredient1->unit = "หัวใหญ่";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "พริกไทยเม็ด";
        $ingredient1->quantity = 1;
        $ingredient1->unit = "ช้อนโต๊ะ";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "กระเทียมดอง";
        $ingredient1->quantity = 2;
        $ingredient1->unit = "หัว";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "เส้นเล็ก";
        $ingredient1->quantity = 1;
        $ingredient1->unit = "ห่อ";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "ถั่วงอก";
        $ingredient1->quantity = 1;
        $ingredient1->unit = "ถุง";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "เนื้อหมู";
        $ingredient1->quantity = 200;
        $ingredient1->unit = "กรัม";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();
//        --------------------

        $foodRecipe = new FoodRecipe();
        $foodRecipe->name = "กะเพราไก่ไข่ดาว";
        $foodRecipe->detail = "กะเพราไก่ไข่ดาวสูตรง่าย อร่อย ทำทานได้ที่บ้าน";
        $foodRecipe->user_id = 20;
        $foodRecipe->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "นำพริกและกระเทียมไปโขลก";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "ตั้งกระทะให้ร้อนทอดไข่ดาวให้พอสุด";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "ทอดไข่ดาวเสร็จนำไข่ดาวออก เติมน้ำมันและนำกระเทียมและพริกไปผัดจนเหลือง และใส่ไก่ลงไปผัด";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = "เมื่อไก่สุกแล้ว ใส่น้ำหอย ซีอิ๊วขาว น้ำปลา น้ำตาล ลงไปผัด";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $cookingProcess1 = new CookingProcess();
        $cookingProcess1->process = " พอเดือดให้ใส่ใบกะเพราไปผัด แปปเดียว ";
        $cookingProcess1->food_recipe_id = $foodRecipe->id;
        $cookingProcess1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "เนื้อไก่สับ";
        $ingredient1->quantity = 200;
        $ingredient1->unit = "กรัม";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "กระเทียม";
        $ingredient1->quantity = 4;
        $ingredient1->unit = "กลีบ";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "พริกขี้หนู";
        $ingredient1->quantity = 3;
        $ingredient1->unit = "เม็ด";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "ใบกะเพรา";
        $ingredient1->quantity = 5;
        $ingredient1->unit = "กิ่ง";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "น้ำมันหอยและน้ำมันพืช";
        $ingredient1->quantity = 2;
        $ingredient1->unit = "ช้อนโต๊ะ";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "น้ำปลา";
        $ingredient1->quantity = 1;
        $ingredient1->unit = "ช้อนโต๊ะ";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "น้ำตาลทราย";
        $ingredient1->quantity = 1;
        $ingredient1->unit = "ช้อนชา";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();

        $ingredient1 = new Ingredient();
        $ingredient1->name = "ซีอิ๊วขาว";
        $ingredient1->quantity = 1;
        $ingredient1->unit = "ช้อนโต๊ะ";
        $ingredient1->food_recipe_id = $foodRecipe->id;
        $ingredient1->save();
        //        --------------------

        $foodRecipe =  new FoodRecipe();
        $foodRecipe->name = "สุกี้หมูรสกลมกล่อม";
        $foodRecipe->detail = "เมนูง่ายๆ ทำกินเองได้ที่บ้าน อร่อยชัวร์";
        $foodRecipe->user_id = 21;
        $foodRecipe->save();

        $cookingProcess = new CookingProcess();
        $cookingProcess->process = "เตรียมหมูหมักให้เรียบร้อย ต้มน้ำรอเดือด";
        $cookingProcess->food_recipe_id = $foodRecipe->id;
        $cookingProcess->save();

        $cookingProcess = new CookingProcess();
        $cookingProcess->process = "ใส่คนอร์สุกี้ชาบู ลงไปละลายในน้ำที่เดือด หั่นกระเทียมเกือบละเอียด";
        $cookingProcess->food_recipe_id = $foodRecipe->id;
        $cookingProcess->save();

        $cookingProcess = new CookingProcess();
        $cookingProcess->process = "ใส่เนื้อหมูลงไปในนำ้เดือด รอจนเนื้อหมูเริ่มสุกใส่กระเทียม และไข่ไก่ลงไป";
        $cookingProcess->food_recipe_id = $foodRecipe->id;
        $cookingProcess->save();

        $cookingProcess = new CookingProcess();
        $cookingProcess->process = "หากมีนำ้จิ้มเต้าเจี้ยวให้ใส่ลงไป หากไม่มีก็ใช้สูตรที่สะดวก คนให้เข้ากัน ปรุงรสด้วยพริกไทยให้หอม";
        $cookingProcess->food_recipe_id = $foodRecipe->id;
        $cookingProcess->save();

        $ingredient = new Ingredient();
        $ingredient->name = "หมูหมัก";
        $ingredient->quantity = 100;
        $ingredient->unit = "กรัม";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = "กระเทียม";
        $ingredient->quantity = 4;
        $ingredient->unit = "หัว";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = "วุ้นเส้น";
        $ingredient->quantity = 1;
        $ingredient->unit = "ถุง";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = "คนอร์รสสุกี้ชาบู";
        $ingredient->quantity = 1;
        $ingredient->unit = "ก้อน";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = "ไข่ไก่";
        $ingredient->quantity = 2;
        $ingredient->unit = "ฟอง";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = "พริกไทย";
        $ingredient->quantity = 1;
        $ingredient->unit = "ขวด";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

          $ingredient = new Ingredient();
        $ingredient->name = "น้ำจิ้มสุกี้ ยี่ห้อใดก็ได้";
        $ingredient->quantity = 1;
        $ingredient->unit = "ขวด";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();
        //        --------------------

        $foodRecipe =  new FoodRecipe();
        $foodRecipe->name = "สปาร์เกตตีคาร์โบนาร่า";
        $foodRecipe->detail = "ทำง่ายๆ ไม่ถึง30นาที รสชาติเหมือนทานที่ภัตตาคารลอนดอน";
        $foodRecipe->user_id = 5;
        $foodRecipe->save();

        $cookingProcess = new CookingProcess();
        $cookingProcess->process = "ตั้งหม้อต้มนำ้ให้เดือดใส่เกลือและน้ำมันมะกอก จากนั้นใส่เส้นสปาเกตตีลงไป ";
        $cookingProcess->food_recipe_id = $foodRecipe->id;
        $cookingProcess->save();

        $cookingProcess = new CookingProcess();
        $cookingProcess->process = "คนจนกว่าเส้นจะจมน้ำหมดทุกเส้น หรี่ไฟอ่อนปิดฝา รอ 10นาที";
        $cookingProcess->food_recipe_id = $foodRecipe->id;
        $cookingProcess->save();

        $cookingProcess = new CookingProcess();
        $cookingProcess->process = "นำสปาเกตตีแช่น้ำเย็น และสะเด็ดน้ำออก นำเส้นไปคลุกนำ้มันพืชให้ไมติดกัน";
        $cookingProcess->food_recipe_id = $foodRecipe->id;
        $cookingProcess->save();

        $cookingProcess = new CookingProcess();
        $cookingProcess->process = "นำคุกกิ้งครีม ชีสพาร์เมซานขูดฝอย และพริกไทยผสมลงในถ้วย คนให้เข้ากัน";
        $cookingProcess->food_recipe_id = $foodRecipe->id;
        $cookingProcess->save();

        $cookingProcess = new CookingProcess();
        $cookingProcess->process = "ใส่เบคอนในกระทะ ผัดจนเกียมแล้วใส่เนยลงไป พร้อมกับกระเทียม หอมใหญ่ ผัดจนส่งกลิ่นหอม";
        $cookingProcess->food_recipe_id = $foodRecipe->id;
        $cookingProcess->save();


        $cookingProcess = new CookingProcess();
        $cookingProcess->process = "ใส่สปาเกตตีลงไปผัด และใส่ไข่แดงลงไปคนให้ไข่แดงเข้าเส้น เป็นอันเสร็จสมบูรณ์";
        $cookingProcess->food_recipe_id = $foodRecipe->id;
        $cookingProcess->save();

        $ingredient = new Ingredient();
        $ingredient->name = "เส้นสปาเกตตี";
        $ingredient->quantity = 300;
        $ingredient->unit = "กรัม";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = "กระเทียมสับ";
        $ingredient->quantity = 4 ;
        $ingredient->unit = "กลีบ";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = "เบคอนหั่นชิ้นเล็ก ๆ ";
        $ingredient->quantity = 100;
        $ingredient->unit = "กรัม";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = "นำ้มันมะกอก";
        $ingredient->quantity = 1;
        $ingredient->unit = "ช้อนโต๊ะ";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = "ไข่แดง";
        $ingredient->quantity = 1;
        $ingredient->unit = "ฟอง";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = "พริกไทยป่น";
        $ingredient->quantity = 1;
        $ingredient->unit = "ช้อนชา";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = "เนย";
        $ingredient->quantity = 1;
        $ingredient->unit = "ช้อนโต๊ะ";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = "หอมหัวใหญ่";
        $ingredient->quantity = 100;
        $ingredient->unit = "กรัม";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = "คุกกิ้งครีม";
        $ingredient->quantity = 1;
        $ingredient->unit = "ช้อนชา";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();

        $ingredient = new Ingredient();
        $ingredient->name = "ชีสพาร์เมซานขูดฝอย";
        $ingredient->quantity = 100;
        $ingredient->unit = "กรัม";
        $ingredient->food_recipe_id = $foodRecipe->id;
        $ingredient->save();
        //        --------------------

        $food_recipe1 = new FoodRecipe();
        $food_recipe1->name = "ต้มยำปลากระป๋อง";
        $food_recipe1->detail = "เมนูง่ายๆ สำหรับแม่บ้านที่ไม่ได้เก่งเรื่องทำอาหาร แค่ปรุงรสที่ชอบก็ถือว่าอร่อยแล้วค่ะกับเมนู ต้มยำปลากระป๋อง ครั้งนี้จะใส่วุ้นเส้นลงไปด้วยสำหรับคนที่เบื่อข้าว กินต้มยำปลากระป๋องกับวุ้นเส้นก็อิ่มอยู่ท้องแถมเป็นเมนูที่ลดความอ้วนได้อีกต่างหาก";
        $food_recipe1->user_id = 5;
        $food_recipe1->save();

        $ingredient1_1 = new Ingredient();
        $ingredient1_1->name = "ตะไคร้";
        $ingredient1_1->quantity = 2;
        $ingredient1_1->unit = "ต้น";
        $ingredient1_1->food_recipe_id = $food_recipe1->id;
        $ingredient1_1->save();

        $ingredient1_2 = new Ingredient();
        $ingredient1_2->name = "ข่า";
        $ingredient1_2->quantity = 6;
        $ingredient1_2->unit = "ชิ้น";
        $ingredient1_2->food_recipe_id = $food_recipe1->id;
        $ingredient1_2->save();

        $ingredient1_3 = new Ingredient();
        $ingredient1_3->name = "ใบมะกรูด";
        $ingredient1_3->quantity = 6;
        $ingredient1_3->unit = "ชิ้น";
        $ingredient1_3->food_recipe_id = $food_recipe1->id;
        $ingredient1_3->save();

        $ingredient1_4 = new Ingredient();
        $ingredient1_4->name = "หอมแดง";
        $ingredient1_4->quantity = 6;
        $ingredient1_4->unit = "หัว";
        $ingredient1_4->food_recipe_id = $food_recipe1->id;
        $ingredient1_4->save();

        $ingredient1_5 = new Ingredient();
        $ingredient1_5->name = "เห็ดฟาง";
        $ingredient1_5->quantity = 5;
        $ingredient1_5->unit = "ลูก";
        $ingredient1_5->food_recipe_id = $food_recipe1->id;
        $ingredient1_5->save();

        $ingredient1_6 = new Ingredient();
        $ingredient1_6->name = "พริกขี้หนู";
        $ingredient1_6->quantity = 5;
        $ingredient1_6->unit = "เม็ด";
        $ingredient1_6->food_recipe_id = $food_recipe1->id;
        $ingredient1_6->save();

        $ingredient1_7 = new Ingredient();
        $ingredient1_7->name = "น้ำปลา";
        $ingredient1_7->quantity = 3;
        $ingredient1_7->unit = "ช้อนโต๊ะ";
        $ingredient1_7->food_recipe_id = $food_recipe1->id;
        $ingredient1_7->save();

        $ingredient1_8 = new Ingredient();
        $ingredient1_8->name = "มะนาว";
        $ingredient1_8->quantity = 2;
        $ingredient1_8->unit = "ช้อนโต๊ะ";
        $ingredient1_8->food_recipe_id = $food_recipe1->id;
        $ingredient1_8->save();

        $ingredient1_9 = new Ingredient();
        $ingredient1_9->name = "ปลากระป๋อง";
        $ingredient1_9->quantity = 3;
        $ingredient1_9->unit = "กระป๋อง";
        $ingredient1_9->food_recipe_id = $food_recipe1->id;
        $ingredient1_9->save();

        $process1_1 = new CookingProcess();
        $process1_1->process = "ตั้งน้ำให้เดือด และใส่ตะไคร้ ข่า ใบมะกรูด หอมแดง และเห็ดฟาง";
        $process1_1->food_recipe_id = $food_recipe1->id;
        $process1_1->save();

        $process1_2 = new CookingProcess();
        $process1_2->process = "เทปลากระป๋องลงไป ปรุงรสด้วยพริกขี้หนูบุบ และน้ำปลา";
        $process1_2->food_recipe_id = $food_recipe1->id;
        $process1_2->save();

        $process1_3 = new CookingProcess();
        $process1_3->process = "คนซัก 1-2 นาที ตามด้วยน้ำมะนาว และผักชีฝรั่ง เสร้จแล้วตักใส่ชามเสิร์ฟ";
        $process1_3->food_recipe_id = $food_recipe1->id;
        $process1_3->save();
        //        --------------------

        $food_recipe2 = new FoodRecipe();
        $food_recipe2->name = "ตำปูปลาร้า";
        $food_recipe2->detail = "ตำปูปลาร้า จัดว่าฮอตฮิตไม่เคยตกยุค เพราะคนส่วนใหญ่มักจะสั่งเวลาไปร้านอาหารอีสาน นัวคูณสองทั้งใส่ปลาร้า และปูนา เครื่องส้มตำ และรสชาติใกล้เคียงกับส้มตำลาว เพียงแค่ใส่ปูนาเพิ่มเข้าไป";
        $food_recipe2->user_id = 6;
        $food_recipe2->save();

        $ingredient2_1 = new Ingredient();
        $ingredient2_1->name = "เส้นมะละกอสับ";
        $ingredient2_1->quantity = 2;
        $ingredient2_1->unit = "กำมือ";
        $ingredient2_1->food_recipe_id = $food_recipe2->id;
        $ingredient2_1->save();

        $ingredient2_2 = new Ingredient();
        $ingredient2_2->name = "มะเขือเทศ";
        $ingredient2_2->quantity = 2;
        $ingredient2_2->unit = "ลูก";
        $ingredient2_2->food_recipe_id = $food_recipe2->id;
        $ingredient2_2->save();

        $ingredient2_3 = new Ingredient();
        $ingredient2_3->name = "พริกสด";
        $ingredient2_3->quantity = 3;
        $ingredient2_3->unit = "เม็ด";
        $ingredient2_3->food_recipe_id = $food_recipe2->id;
        $ingredient2_3->save();

        $ingredient2_4 = new Ingredient();
        $ingredient2_4->name = "มะนาว";
        $ingredient2_4->quantity = 1;
        $ingredient2_4->unit = "ลูก";
        $ingredient2_4->food_recipe_id = $food_recipe2->id;
        $ingredient2_4->save();

        $ingredient2_5 = new Ingredient();
        $ingredient2_5->name = "กระเทียม";
        $ingredient2_5->quantity = 6;
        $ingredient2_5->unit = "เม็ด";
        $ingredient2_5->food_recipe_id = $food_recipe2->id;
        $ingredient2_5->save();

        $ingredient2_6 = new Ingredient();
        $ingredient2_6->name = "น้ำปลาร้า";
        $ingredient2_6->quantity = 1.5;
        $ingredient2_6->unit = "ช้อนโต๊ะ";
        $ingredient2_6->food_recipe_id = $food_recipe2->id;
        $ingredient2_6->save();

        $ingredient2_7 = new Ingredient();
        $ingredient2_7->name = "น้ำปลา";
        $ingredient2_7->quantity = 1.5;
        $ingredient2_7->unit = "ช้อนโต๊ะ";
        $ingredient2_7->food_recipe_id = $food_recipe2->id;
        $ingredient2_7->save();

        $ingredient2_8 = new Ingredient();
        $ingredient2_8->name = "น้ำตาลทราย";
        $ingredient2_8->quantity = 0.5;
        $ingredient2_8->unit = "ช้อนโต๊ะ";
        $ingredient2_8->food_recipe_id = $food_recipe2->id;
        $ingredient2_8->save();

        $ingredient2_9 = new Ingredient();
        $ingredient2_9->name = "ผงชูรส";
        $ingredient2_9->quantity = 0.5;
        $ingredient2_9->unit = "ช้อนโต๊ะ";
        $ingredient2_9->food_recipe_id = $food_recipe2->id;
        $ingredient2_9->save();

        $ingredient2_10 = new Ingredient();
        $ingredient2_10->name = "ปูนา";
        $ingredient2_10->quantity = 2;
        $ingredient2_10->unit = "ตัว";
        $ingredient2_10->food_recipe_id = $food_recipe2->id;
        $ingredient2_10->save();

        $process2_1 = new CookingProcess();
        $process2_1->process = "ใส่พริกกับกระเทียมลงในครกตำพอหยาบ จากนั้นฝานมะเขือเทศตามลงตำให้พอเข้ากัน ปรุงรสด้วยน้ำปลาร้า น้ำปลา น้ำตาลทราย ผงชูรส มะนาว และปูนา";
        $process2_1->food_recipe_id = $food_recipe2->id;
        $process2_1->save();

        $process2_2 = new CookingProcess();
        $process2_2->process = "ใส่เส้นมะละกอสับ ตำเคล้าให้เครื่องปรุงทั้งหมดเข้ากันดี ชิมรสชาติและปรุงเพิ่มได้ตามใจชอบ จากนั้นตักใส่จาน ได้แล้วส้มตำปู ปลาร้า สุดฟินเลยจ้า";
        $process2_2->food_recipe_id = $food_recipe2->id;
        $process2_2->save();
        //        --------------------
    }
}

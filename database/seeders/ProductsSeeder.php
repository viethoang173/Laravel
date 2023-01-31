<?php

namespace Database\Seeders;

use App\Models\News;
use App\Models\Products;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    public function run()
    {
        $product1 = Products::create([
            'name' => 'Táo',
            'description' => 'Quả táo có chứa rất nhiều dưỡng chất có lợi cho sức khỏe của bạn chẳng hạn như Carb, chất xơ, đường, chất béo, vitamin C, kali, magie,… Tuy cung cấp nhiều dinh dưỡng nhưng một quả táo chỉ có chứa 52 calo.',
            'thumbnail' => 'https://tieudung.kinhtedothi.vn/upload_images/images/2020/10/10/tao.jpg',
            'price' => '100000',
            'amount' => '100',
            'category_id' => '1',
            'status' => '1',
        ]);

        $product2 = Products::create([
            'name' => 'Dưa hấu',
            'description' => 'Dưa hấu (tên khoa học là Citrullus lanatus) là một loài thực vật thuộc họ Cucurbitaceae, một loài thực vật có hoa giống như cây nho có nguồn gốc từ khu Tây Phi. Nó được trồng để lấy quả. Dưa hấu (Citrullus lanatus) là một loài dây leo xoắn và dài trong họ thực vật có hoa Cucurbitaceae.',
            'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Citrullus_lanatus5SHSU.jpg/280px-Citrullus_lanatus5SHSU.jpg',
            'price' => '500000',
            'amount' => '50',
            'category_id' => '1',
            'status' => '1',
            ]);

        $product3 = Products::create([
            'name' => 'Rau cần',
            'description' => 'Rau cần ta còn được gọi là rau cần nước, hương cần, hồ cần... loại rau dễ trồng và được sử dụng trong nhiều bài thuốc chữa bệnh với công dụng lợi tiểu, thanh nhiệt, hạ sốt, kháng viêm, hạ huyết áp... Cùng tìm hiểu về công dụng của cây rau cần ta qua bài viết dưới đây.',
            'thumbnail' => 'https://namlimxanh.vn/wp-content/uploads/2018/10/cay-can-nuoc-chua-benh-gi-va-cach-dung-cay-can-nuoc-hieu-qua.jpg',
            'price' => '50000',
            'amount' => '50',
            'category_id' => '2',
            'status' => '1',
            ]);

        $product4 = Products::create([
            'name' => 'Khoai tây',
            'description' => 'Khoai tây (danh pháp hai phần: Solanum tuberosum), thuộc họ Cà (Solanaceae). Khoai tây là loài cây nông nghiệp ngắn ngày, trồng lấy củ chứa tinh bột. Chúng là loại cây trồng lấy củ rộng rãi nhất thế giới và là loại cây trồng phổ biến thứ tư về mặt sản lượng tươi – xếp sau lúa, lúa mì và ngô[1]. Lưu trữ khoai tây dài ngày đòi hỏi bảo quản trong điều kiện lạnh.',
            'thumbnail' => 'http://cdn.tgdd.vn/Files/2020/11/30/1310328/10-mon-ngon-tu-khoai-tay-vua-ngon-vua-bo-202011301024410498.jpg',
            'price' => '75000',
            'amount' => '100',
            'category_id' => '2',
            'status' => '1',
            ]);

        $product5 = Products::create([
            'name' => 'Pho mát',
            'description' => 'Pho mát hay còn gọi là phô mai hoặc cũng có khi là phó mát, phổ mách[1] hay phôma (từ tiếng Pháp fromage) hay cheese/cheeze là thực phẩm làm bằng cách kết đông và lên men (ủ) sữa của bò, trâu, dê, cừu, ngựa, tê giác hoặc từ sữa thú vật khác với mục đích bảo quản các sản phẩm từ sữa',
            'thumbnail' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Reblochon_AOC.jpg/300px-Reblochon_AOC.jpg',
            'price' => '200000',
            'amount' => '150',
            'category_id' => '3',
            'status' => '1',
            ]);

        $product6 = Products::create([
            'name' => 'Sữa tươi',
            'description' => 'Sữa tươi là các loại sữa động vật (bò sữa, dê, cừu...) ở dạng nguyên liệu thô, dạng nước, chưa qua chế biến hoặc chỉ mới qua sơ chế và chưa được tiệt trùng hay khử trùng triệt để bởi các thiết bị xử lý nhiệt vi lọc, sữa tươi được bảo quản và vận chuyển trong điều kiện lạnh trước và trong khi sử dụng.',
            'thumbnail' => 'https://gsvvietnam.com/wp-content/uploads/image2-27.jpg',
            'price' => '40000',
            'amount' => '100',
            'category_id' => '3',
            'status' => '1',
            ]);

    }
}

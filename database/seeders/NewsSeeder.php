<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    public function run()
    {
        $new1 = News::create([
            'title' => 'CUỘC THI VIẾT "HƯƠNG VỊ TẾT": Ẩm thực tinh hoa, sang trọng',
            'content' => '(NLĐO) - Dù không phải sơn hào hải vị, nhưng với tôi bánh tét tro nếp đắng là loại ẩm thực tinh hoa, sang trọng theo cách của nó.
                            Năm nào cũng vậy, cứ còn khoảng 15 ngày nữa "chạm" Tết Nguyên đán, má đều gọi điện dò hỏi năm nay đứa con trai - là tôi - cần bao nhiêu bánh tét tro nếp đắng để cúng ông bà, tổ tiên và làm quà tặng bạn bè.

                            Mấy chục năm qua, từ thuở nhà tranh - phên đất, đến giờ là nhà ngói - tường gạch, má vẫn lo cái Tết có "bánh tét tro nếp đắng" như thế.

                            Với má, Tết mà không có loại bánh này là không phải Tết. Và điều đó đã trở thành nét văn hóa đặc trưng ngày Tết của gia đình, để lại trong tôi một "bầu trời kỷ niệm".',
            'thumbnail'=>'https://nld.mediacdn.vn/thumb_w/684/291774122806476800/2023/1/30/thumbnailma-hong-16750641525771801576079.jpg',
            'category_id'=>'1',
            'status'=>'1'
            ]);

        $new2 = News::create([
            'title' => 'Xuân Bắc - sao lại im lặng vậy, lên tiếng đi chứ!',
            'content' => '(NLĐO)- Trong lúc "nước sôi lửa bỏng" như thế mà không thấy "tăm Xuân Bắc" sủi lên thì sự suy diễn và tổn thương sẽ càng nặng nề cho cả hai phía...
                        Status dài hơn một bài báo của Giám đốc của Nhà hát Kịch Việt Nam, Nghệ sĩ ưu tú (NSƯT) Xuân Bắc ngay sau khi đăng nhận được trên 3.800 bình luận, trên 1 vạn lượt bày tỏ cảm xúc.
                        Tuy nhiên, trong thời điểm được quan tâm dồn dập như vậy, nghệ sĩ này thình lình im hơi lặng tiếng. Nói theo cách dân dã là "lặn không sủi tăm"!.',
            'thumbnail' => 'https://nld.mediacdn.vn/thumb_w/684/291774122806476800/2023/1/27/status-xuan-bac-1674789548797796230077.jpg',
            'category_id' => '1',
            'status' => '1',
        ]);

        $new3 = News::create([
            'title' => 'Nam thanh niên sát hại người tình hơn 17 tuổi rồi phóng hỏa phòng trọ đốt xác phi tang',
            'content' => '(NLĐO) - Do mâu thuẫn, nam thanh niên 28 tuổi dùng búa sát hại người phụ nữ 45 tuổi rồi phóng hỏa đốt phòng trọ cùng thi thể người tình nhằm phi tang
                        Ngày 18-1, Công an quận Kiến An (TP Hải Phòng) cho biết đang khẩn trương điều tra, làm rõ vụ trọng án Trương Văn Tùng (SN 1995, trú tại xã Quang Trung, huyện Tứ Kỳ, tỉnh Hải Dương) dùng búa sát hại người tình rồi đốt xác phi tang.
                        Theo thông tin ban đầu, vào tối 17-1, phát hiện một phòng trọ tại dãy nhà trọ trong ngõ 81, đường Hoa Khê, phường Quán Trữ, quận Kiến An bốc cháy, người dân liền báo tin tới cơ quan chức năng.
                        Ngay khi nhận thông tin, lực lượng Phòng cháy chữa cháy và cứu nạn cứu hộ Công an TP Hải Phòng huy động hàng chục cán bộ, chiến sĩ và 2 xe chữa cháy phối hợp với Công an quận Kiến An khẩn trương tới dập lửa.',
            'thumbnail' => 'https://nld.mediacdn.vn/thumb_w/684/291774122806476800/2023/1/18/nhatro-1674034638372-1674050499993299327979.jpg',
            'category_id' => '2',
            'status' => '1',
        ]);

        $new4 = News::create([
            'title' => 'Thủ tướng thị sát công trường cầu Mỹ Thuận 2, đôn đốc các cao tốc ở ĐBSCL',
            'content' => '(Dân trí) - Sáng 30/1 (nhằm mùng 9 Tết), Thủ tướng Phạm Minh Chính đi thị sát và thăm hỏi công nhân tại công trình cầu Mỹ Thuận 2 và tuyến cao tốc Cần Thơ - Cà Mau.
                        Tham gia đoàn công tác với Thủ tướng có Phó Thủ tướng Trần Hồng Hà, Bộ trưởng Bộ Giao thông vận tải (GTVT) Nguyễn Văn Thắng, lãnh đạo một số địa phương vùng ĐBSCL.
                        Thủ tướng yêu cầu rút ngắn tiến độ cầu Mỹ Thuận 2
                        Trong buổi sáng, Thủ tướng đã tới kiểm tra công trường thi công cầu Mỹ Thuận 2 ở đầu cầu phía Tiền Giang; động viên, tặng quà cán bộ, công nhân tham gia dự án. Đây là lần thứ 3 Thủ tướng trực tiếp tới khảo sát hiện trường thi công cây cầu này.',
            'thumbnail' => 'https://icdn.dantri.com.vn/thumb_w/680/2023/01/30/29f337800279d9278068-1675058833819.jpg',
            'category_id' => '2',
            'status' => '1',
        ]);

        $new5 = News::create([
            'title' => 'Phủ Tây Hồ đông kín người đi lễ giữa trưa ngày làm việc đầu tuần năm mới',
            'content' => '(Dân trí) - Trưa nay (30/1) tức mùng 9 Tết Quý Mão, Phủ Tây Hồ chật kín người dân đi lễ cầu bình an, may mắn. Trong đó, nhiều người là dân công sở, tận dụng giờ nghỉ trưa để đi lễ, du xuân ngày đầu năm mới.
                        Trưa 30/9 (tức mùng 9 Tết Quý Mão), hàng nghìn người đã đổ về Phủ Tây Hồ (quận Tây Hồ, Hà Nội) để dâng hương, đi lễ cầu may dịp đầu năm mới.',
            'thumbnail' => 'https://icdn.dantri.com.vn/thumb_w/1920/2023/01/30/phu-tay-ho-mung-9-tet2-1675062223164.jpg',
            'category_id' => '3',
            'status' => '1',
        ]);
    }
}

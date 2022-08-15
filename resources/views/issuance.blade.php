@extends('layouts.master')

@section('title', 'إصدار التأشيرة - محمد عبده العسيري (تدابير)')

@section('content')
    

<main id="primary" class="site-main">

    <header class="page-header">
        <div class="container">
            <h1 class="page-title">إصدار التأشيرة</h1>
        </div>
    </header>

    <div class="entry-content">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                    <h3>طريقة سداد رسوم التأشيرة عن طريق خدمة سداد</h3>
                    <ul>
                        <li>الدخول الي: موقع البنك تطبيق البنك الصراف الالي</li>
                        <li>اختيار المدفوعات</li>
                        <li>اختيار المدفوعات الحكومية &#8211; سداد</li>
                        <li>نوع الخدمة (الاستقدام)</li>
                        <li>نوع الطلب (تأشيرة عمالة)</li>
                        <li>نوع العملية (دفع)</li>
                        <li>ادخال رقم هوية صاحب العمل</li>
                        <li>تحديد عدد التأشيرات المرادة</li>
                        <li>دفع الرسوم: مبلغ التأشيرة 2000 ريال يتم سدادها قبل رفع الطلب</li>
                        <li>الدخول على موقع مساند <a
                                href="https://www.musaned.com.sa/ar">https://www.musaned.com.sa/ar</a></li>
                        <li>اختيار طلب تأشيرة جديدة من الصفحة الرئيسية أو من لوحة بياناتي</li>
                        <li>التأكد من جاهزية الطلب من خلال التالي: تسديد رسوم التأشيرة 2000 ريال قبل رفع الطلب
                            عدم وجود مخالفات مرورية</li>
                        <li>تعبئة بيانات التأشيرة المهنة الجنسية جهة القدوم</li>
                        <li>تحديد طريقة اثبات القدرة المالية التعريف بالراتب كشف الحساب البنكي</li>
                        <li>رفع الوثائق على النظام</li>
                        <li>تأكيد الطلب بالتعهد والإقرار بصحة البيانات المدخلة.</li>
                        <li>
                            <h3>
                            خدمة خاصة: 
                            </h3>
                        </li>
                    </ul>
                </div>
                <div class="col-md-5">

                    <div class="post-thumbnail">
                        <img width="1064" height="790"
                            src="{{asset('assets/images/IjPjVYHN0TecaRQRhpKdTD5o6z7K1BUNdzCnuMXI.webp')}}"
                            class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt=""
                            {{-- srcset="wp-content/uploads/2022/07/IjPjVYHN0TecaRQRhpKdTD5o6z7K1BUNdzCnuMXI.webp 1064w, wp-content/uploads/2022/07/IjPjVYHN0TecaRQRhpKdTD5o6z7K1BUNdzCnuMXI-300x223.webp 300w, wp-content/uploads/2022/07/IjPjVYHN0TecaRQRhpKdTD5o6z7K1BUNdzCnuMXI-1024x760.webp 1024w, wp-content/uploads/2022/07/IjPjVYHN0TecaRQRhpKdTD5o6z7K1BUNdzCnuMXI-768x570.webp 768w" --}}
                            sizes="(max-width: 1064px) 100vw, 1064px" /> </div><!-- .post-thumbnail -->

                </div>
            </div>
        </div>
    </div>

</main><!-- #main -->





@endsection
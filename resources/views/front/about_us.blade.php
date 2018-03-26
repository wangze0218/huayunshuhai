@extends('front.public.master')
@section('script')
    <style>
        .container-fluid{
            margin-top: 66px;
        }
        .about-us{
            /*height: 500px;*/
            color: #fff;
            background-image: url('http://img.huayunshuhai.com/cooperative/bg1.jpg');
        }
        .about-us h1{
            padding: 30px 0px;
        }
        .about-us p{
            padding-top: 15px;
        }
        .shadow img{
            vertical-align: middle;
            border: 1px solid white;
            box-shadow: 0 6px 30px -10px rgba(0, 0, 0, .6)!important;
        }
        .box-padding{
            padding: 50px 0px;
        }
        .text-padding{
            padding-top: 30px;
        }
        .text-title{
            font-size: 25px;
        }
        .row-margin-top{
            margin-top: 50px;
        }
        .auto{
            width: 80%;
        }
        .text-grey{
            color:#777;
        }
        @media screen and (max-width: 768px) {
            .shadow {
                box-shadow: 0 0px 0px 0px rgba(0, 0, 0, .6) !important;
            }

            .about-us {
                display: none;
            }
        }
    </style>
@endsection
@section('content')
    <div class="container-fluid about-us" style="height:500px;">
    </div>
    <div class="container-fluid">
        <div class="container box-padding">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="">加入我们</h1>
                    <p class="text-padding text-title">技术驱动创新，服务引领行业</p>
                </div>
            </div>
            <div class="row row-margin-top">
                <div class="col-md-3">
                    <img src="http://img.huayunshuhai.com/about_us/2_1.jpg" class="auto img-responsive center-block">
                </div>
                <div class="col-md-3">
                    <h3>游戏建模师</h3>
                    <h4>岗位职责：</h4>
                    <ul class="text-grey">
                        <li>配合策划、原画师制定游戏角色和物品风格；</li>
                        <li>根据原画师绘制的原画制作3D角色模型；</li>
                        <li>配合动画师对制作好的模型进行优化调整。</li>
                    </ul>
                    <h4>任职要求：</h4>
                    <ul class="text-grey">
                        <li>美术相关专业毕业，具有扎实的美术造型功底；</li>
                        <li>具有3年以上游戏建模相关工作经验；</li>
                        <li>热爱设计，有良好的审美品味、设计力和表现力，具备良好的产品质量把控能力；</li>
                        <li>有团队合作精神，能够承受较强的工作压力；</li>
                        <li>熟练使用3DMAX/MAYA等3D建模软件有UE4开发经验优先；</li>
                        <li>对虚拟现实感兴趣的优先。</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <img src="http://img.huayunshuhai.com/about_us/2_2.jpg" class="auto img-responsive center-block" alt="">
                </div>
                <div class="col-md-3">
                    <h3>VR软件工程师</h3>
                    <h4>岗位职责：</h4>
                    <ul class="text-grey">
                        <li>实现虚拟现实系统的逻辑及优化；</li>
                        <li>使用UE4和C++进行开发；</li>
                        <li>根据需求进行开发工具的设计、实现及版本更新、BUG维护等。</li>
                    </ul>
                    <h4>任职要求：</h4>
                    <ul class="text-grey">
                        <li>计算机相关专业学历；</li>
                        <li>对VR有强烈的兴趣，有意愿进行深入研究和学习；</li>
                        <li>有自主学习的能力、性格开朗，良好的沟通能力；</li>
                        <li>有良好的C++语言基础；</li>
                        <li>具备良好积极态度对待项目及工作内容；</li>
                        <li>有良好的面向对象开发意识，良好的代码设计能力及代码习惯；</li>
                        <li>有3D游戏开发经验者优先，有良好英语沟通能力的优先。</li>
                    </ul>
                </div>
            </div>

        </div>

    </div>
@endsection

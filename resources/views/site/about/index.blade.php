@extends('site.layouts.app')
@section('title', 'about-us')
@section('content')

    <section class="section_gap big_features" id="OSI_Model">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center">
                    <div class="main_title">
                        <p class="top_title">Discover&learn</p>
                        <h2>ANTENNA CAMPUS</h2>
                        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Fugiat odio atque voluptatum, ab in corrupti quia dignissimos autem eius.</p>
                    </div>
                </div>
            </div>

            <div class="row features_content bottom-features">
                <div class="col-lg-8">
                    <div class="common_style">
                        <p class="line">ANTENNA CAMPUS BLOG</p>
                        <h3>About US</h3>
                        <p class="p_about">
                            The primary weakness shared by all wireless applications and technologies is the vulnerability to security attacks. In order to be able to better address the vulnerabilities of wireless sensor network in terms of security it is important to understand the behavior of attacks and the available protocols and tools to detect and prevents these attacks
                            Antenna Campus is aim to provide educational and interactive environment for people whose interested in network engineering and cybersecurity by providing books ,references and UML models that describe threats for each Layer and protocols to protect it, also for general people by providing dashboard that automatically updated to record most recent threats that happening around the world and by providing post of the week for sharing articles .


                        </p>
                    </div>

                </div>

                <div class="col-lg-4 ">
                    <div class="big_f_left">
                        <img class="img-fluid" src="{{asset('site/img/chart.png')}}" alt="">
                    </div>
                </div>

            </div>



            <br>
            <div class="row features_content visions">
                <div class="col-lg-4 ">
                    <div class="big_f_left">
                        <img class="img-fluid" src="{{asset('site/img/vesion.jpg')}}" alt="">
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="common_style">
                        <h3>Our visions</h3>
                        <p class="p_about">
                            The main goal from this website is to help people protecting their wireless sensor networks. We focused on this type of networks because we are in age of Artificial Intelligent and sensors becoming every where so stealing information from sensor networks could cause huge dangerous .Our vision is providing search engine based on machine learning using text classification technique ,so when user copy the attack command to the search engine , the search engine will start looking for keywords to defined which type of attacks the victim faced .

                        </p>


                    </div>
                </div>

            </div>



        </div>
    </section>

@stop

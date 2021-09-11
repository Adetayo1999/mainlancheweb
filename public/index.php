<?php 
  if(isset($_POST['submit'])){
    $mailto = "tomiwaadetayo@gmail.com";
    $from = $_POST["email"];
    $fullName = $_POST["Fullname"];
    $email = $_POST["email"];
    $country = $_POST["Country"];
    $sub = $_POST["subject"];
    $text = $_POST["Message"];
    $subject = "Your Message Submitted Succcessfully | WEBSITE NAME";
    $message = "Client Name: ". $fullName . "\n\n" . "From" . "\n\n" .  $_POST[country] . "\n\n" . "Wrote the following message: ". "\n\n" . "Subject: " $_POST[sub]  . "\n\n"  . $_POST[text];
    $message2= "Dear ". $fullName. "\n\n". "Thank You for contacting us! We will reach out to you shortly \n\n Company";
    $headers = "From ". $from;
    $headers2 = "From ". $mailto;
    $result = mail($mailto, $text, $message, $headers);
    $result2 = mail($from, $subject, $message2, $headers2);
    if ($result) {
        echo '<script type="text/javascript"> alert("Message was sent Succcessfully, We will contact you shortly")
 </script>';
    } else {
       echo '<script type="text/javascript"> alert("Submission failed! Try again ") </script>';
    }
  }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mainlanche.com</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="fontawesome-free-5.15.2-web/css/all.css">
</head>
<body class="bg-gray-50 text-nom xl:text-base font-nunito">


    <!-- THE NAV SECTION -->

    <section class="bg-gradient-to-b from-gray-500 to-gray-700 px-4 py-3 lg:py-6 sm:px-6 md:px-12 lg:px-20 xl:px-36 relative z-20">
        <section class="max-w-xl sm:max-w-xl md:max-w-maxa mx-auto flex justify-between items-center">

            <!-- THE LOGO -->
            <div class="text-2xl lg:text-4xl text-white uppercase font-black">
                <img src="img/logo-with-circle.png" alt="" class="w-8 h-8 sm:w-10 sm:h-10 inline">
                <span class="font-sMrif">Mainlanche</span>
            </div>

            <!-- THE NAV ITEM FOR LARGE SCREENS -->
            <div class="hidden lg:flex justify-between items-center space-x-8">
                <a href="index.html" class="text-white uppercase font-black border-b-0 hover:border-b-4 hover:text-white ">home</a>
                <a href="about.html" class="text-white uppercase font-black border-b-0 hover:border-b-4 hover:text-white ">about</a>
                <a href="directors.html" class="text-white uppercase font-black border-b-0 hover:border-b-4 hover:text-white">directors</a>
                <a href="employment.html" class="text-white uppercase font-black border-b-0 hover:border-b-4 hover:text-white">employment</a>
                <a href="contact-us.html" class="text-white uppercase font-black border-b-0 hover:border-b-4 hover:text-white">contact us</a>
            </div>

            <!-- THE BUTTON IN THE NAV-BAR FOR ONLY SMALL AND MEDIUM DEVICES  -->
            <a href="book-our-services.html" class="hidden sm:block lg:hidden text-xs sm:text-sm py-3 px-4 bg-blue-400 hover:bg-blue-500 text-white font-black rounded-md uppercase">
                book our services
            </a>

            <!-- THE MENU ICON/ BURGER FOR SMALL SCREENS -->
            <div class="block lg:hidden" id="burger">
                <svg class="w-8 h-8 border-2 text-white" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd">
                    </path>
                </svg>
            </div>
            
        </section>
    </section>

    <!-- THE NAV ITEMS FOR SMALL SCREENS -->
    <section class="bg-gray-600 px-4 sm:px-6 md:px-12 w-full transform hidden lg:hidden" id="menu">
        <div class="block lg:hidden items-center py-3 pt-2">
            <a href="index.html" class="block bg-transparent py-3 px-4 font-black uppercase border-t-0 transition duration-300 text-white hover:text-gray-200 hover:bg-gray-700">home</a>
            <a href="about.html" class="block bg-transparent py-3 px-4 font-black uppercase border-t border-gray-500 transition duration-300 text-white hover:text-gray-200 hover:bg-gray-700">about</a>
            <a href="directors.html" class="block bg-transparent py-3 px-4 font-black uppercase border-t border-gray-500 transition duration-300 text-white hover:text-gray-200 hover:bg-gray-700">directors</a>
            <a href="employment.html" class="block bg-transparent py-3 px-4 font-black uppercase border-t border-gray-500 transition duration-300 text-white hover:text-gray-200 hover:bg-gray-700">employment</a>
            <a href="contact-us.html" class="block bg-transparent py-3 px-4 font-black uppercase border-t border-gray-500 transition duration-300 text-white hover:text-gray-200 hover:bg-gray-700">contact us</a>
        </div>
    </section>





    <!-- THE 2ND SECTION -->
    <!-- THE HERO SECTION -->
    <section class="w-full px-4 py-16 bg-gradient-to-b from-blue-300 via-blue-200 to-transparent md:bg-gradient-to-b md:from-blue-200 md:to-transparent rounded-br-full md:rounded-br-none  sm:px-6 md:px-12 lg:px-20 xl:px-36" id="imag-clip">

        <section class="max-w-xl sm:max-w-xl md:max-w-maxa mx-auto md:grid grid-cols-2 space-x-2">

            <!-- THE WRITE UP FOR THE HERO SECTION -->
            <div id="block">

                <!-- THE HERO HEADING -->
                <h1 class="text-2xl sm:text-3xl lg:text-4xl capitalize font-semibold text-gray-600">
                    We make you happy at doing Our Best 
                </h1>

                <!-- THE HERO SUB HEADING -->
                <p class="mt-3 text-sm md:text-base xl:text-xl leading-loose capitalize font-light text-gray-800 ">
                    Have your document translated into more than 100 languages by our professionals. we also provide virtual assistance services with our experience virtual assistance.

                </p>

                <!-- THE BOOK OUR SERVICES BTN AND CONTACT US BTN CONTAIBER -->
                <div class="mt-10 flex justify-start items-center space-x-1">
                    <div>
                        <a href="book-our-services.html" class="block sm:block lg:block text-xs sm:text-sm py-3 px-4 bg-blue-400 hover:bg-blue-500 text-white font-black rounded-md uppercase">
                            book our services
                        </a>
                    </div>
                    <div>
                        <a href="contact-us.html" class="text-xs sm:text-sm py-3 px-4 bg-gray-600 hover:bg-gray-700 border-gray-800 text-white font-black rounded-md uppercase">
                            contact us
                        </a>
                    </div>
                </div>

                <!-- THE HAPPY CLIENT SECTION  -->
                <div class="mt-6 xl:mt-12 max-w-md  text-center space-y-1 capitalize">

                    <p class="text-sm text-gray-500 font-bold italic">our happy client</p>

                    <!-- THE LOGO IMAGES SECTION -->
                    <div class="max-w-md flex gap-2 xl:grid xl:grid-cols-3"> 
                        
                        
                        <i class="fab fa-digg w-full text-gray-500/70 text-3xl sm:text-5xl md:text-4xl lg:text-5xl xl:text-7xl object-cover block"></i>
                        <i class="fab fa-cpanel w-full text-gray-500/70 text-3xl sm:text-5xl md:text-4xl lg:text-5xl xl:text-7xl object-cover block"></i>
                        <i class="fab fa-d-and-d-beyond w-full text-gray-500/70 text-3xl sm:text-5xl md:text-4xl lg:text-5xl xl:text-7xl object-cover block"></i>
                        <i class="fab fa-wodu w-full text-gray-500/70 text-3xl sm:text-5xl md:text-4xl lg:text-5xl xl:text-7xl object-cover block"></i>
                        <i class="fab fa-less w-full text-gray-500/70 text-3xl sm:text-5xl md:text-4xl lg:text-5xl xl:text-7xl object-cover block"></i>
                        <i class="fab fa-hooli w-full text-gray-500/70 text-3xl sm:text-5xl md:text-4xl lg:text-5xl xl:text-7xl object-cover block"></i>
                    
                    </div>

                </div>
                
            </div>
            
            <!-- THE SVG IMAGE FOR THE BANNER -->
            <div class="hidden md:block">
                <img src="img/undraw_winter_designer_a2m7.svg" alt="" class="w-[1000px] h-full ">
            </div>
        </section>

    </section>




    <!-- ABOUT US SECTION -->

    <section class="relative">
        
        <section class="bg-transparent w-full px-4 py-16 sm:px-6 md:px-12 lg:px-20 xl:px-44 2xl:px-60">
            <section class=" max-w-xl sm:max-w-xl md:max-w-maxa mx-auto space-y-8">
    
                <h1 class=" text-3xl capitalize text-gray-500 text-center font-bold ">about us</h1>
    
                <div class="md:max-h-96 space-y-0 md:space-y-0 bg-blue-50 lg:bg-gray-50 shadow-xl sm:grid grid-cols-10 items-center justify-center relative z-10 overflow-hidden rounded-xl">
                    <div class=" max-w-7xl md:max-h-96 col-span-4 lg:col-span-5 z-20">
                        <img src="img/mainlanche.jpg" alt="" class="w-full sm:h-80 lg:h-80 xl:h-full object-cover">
                    </div>
                   
                    <div class=" pb-4 sm:text-xs text-gray-600 md:text-sm lg:text-base leading-loose sm:leading-loose lg:leading-loose xl:leading-loose flex flex-col justify-start items-start col-span-6 lg:col-span-5 z-20">
                        <div class=" px-6 max-w-7xl z-20">
                            <span class="block text-gray-500 capitalize text-2xl mt-4 font-serif">why are we Mainlanche</span>
                            <div class="w-1 h-6 lg:h-12 bg-blue-600">
    
                            </div>
                            <span class="inline-block text-gray-500 font-semibold first-letter:textM2xl">MAINLANCHE</span>  is a Serbian based comapany which deals with customer services and translation services globally. We try our best to keep customers comfortable with our services. We produce better service to all our clients around the world.
                        </div>
        
                        <div class="px-6 flex justify-center items-center mt-6 relative z-20">
                            <a href="about.html" class=" max-w-max flex justify-center items-center space-x-2 group relative z-10">
                                <span class="block w-1 h-6 bg-blue-500 group-hover:bg-blue-700"></span><span class="block capitalize text-sm  text-blue-500 group-hover:text-blue-700">more about us</span>
                            </a>
                        </div>
                    </div>
    
                    <!-- THE BACKGROUND CLIP PATH -->
                    <div id="abt-clp-b" class="hidden sm:block absolute -top-40 -right-28 z-10 filter bg-blue-50 w-80 h-80 rounded-full">
        
                    </div>
                    <div id="abt-clp-b" class="hidden sm:block absolute filter blur-xl top-20 right-96 z-10 bg-blue-50 w-80 h-80 rounded-full transform rotate-180">
        
                    </div>
                </div>
            </section>
    
        </section>

        <!-- THE AMINATION FOM THE MAINLANCHE LOGO IN THE ABOUT US PAGE -->

        <div class="hidden 2xl:block w-64 h-64 bg-gray-200 rounded-full filter blur-md animate-blob mix-blend-multiply absolute top-16 left-16">
            <img src="img/logo-with-circle.png" alt="" class="">
        </div>
        <div class="hidden 2xl:block w-64 h-64 bg-blue-100 rounded-full filter blur-md animate-blob animation-delay-2000 mix-blend-multiply absolute top-16 right-16">
            <img src="img/logo-with-circle.png" alt="" class="">
        </div>
        <div class="hidden 2xl:block w-64 h-64 bg-blue-100 rounded-full filter blur-md animate-blob animation-delay-3000 mix-blend-multiply absolute top-64 left-16">
            <img src="img/logo-with-circle.png" alt="" class="">
        </div>
        <div class="hidden 2xl:block w-64 h-64 bg-gray-200 rounded-full filter blur-md animate-blob animation-delay-4000 mix-blend-multiply absolute top-64 right-16">
            <img src="img/logo-with-circle.png" alt="" class="">
        </div>
        
    </section>
    

    <!-- WHY CHOOSE US SECTION -->

    <section class="bg-gradient-to-r from-green-100 to-blue-20 bg-transparent w-full px-4 py-16 sm:px-6 md:px-12 lg:px-20 xl:px-44 2xl:px-60">

        <section class=" max-w-xl sm:max-w-xl md:max-w-maxa mx-auto space-y-8">

            <div>
                <h1 class=" text-3xl capitalize text-gray-500 text-center font-bold ">why choose us</h1>
                <p class="text-center text-gray-600 mt-4">
                  At MAINLANCHE we like to think of ourselves as something more than just a translation service, virtual assistance and  customer services provider in the conventional sense. In fact, we like to think of ourselves as a comprehensive manager of all translation  
                </p>
            </div>

            <div class="flex flex-col sm:grid grid-cols-2 lg:grid-cols-4 gap-6 sm:gap-4 justify-center items-center">
                <div class="h-full sm:h-72 px-4 py-5 max-w-md bg-gray-50 border-t-4 border-blue-300 shadow-lg rounded-lg transform translate-y-0 hover:-translate-y-2 transition-transform duration-500">
                    <div class="py-3 border-b-2 border-blue-200">
                        <h1 class="text-2xl font-bold text-gray-600 text-center capitalize">efficiency</h1>
                    </div>
                    <div class="flex flex-col justify-center items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-blue-300" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd" />
                          </svg>
    
                          <p class="text-center text-gray-600">
                            We always maximize our resources to work hard and come in under budget every time.
                          </p>
                    </div>
                </div>
    
                <div class="h-full sm:h-72 px-4 py-5 max-w-md bg-gray-50 border-t-4 border-blue-300 shadow-lg rounded-lg transform translate-y-0 hover:-translate-y-2 transition-transform duration-500">
                    <div class="py-3 border-b-2 border-blue-200">
                        <h1 class="text-2xl font-bold text-gray-600 text-center capitalize">quality</h1>
                    </div>
                    <div class="flex flex-col justify-center items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-blue-300" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M2 10.5a1.5 1.5 0 113 0v6a1.5 1.5 0 01-3 0v-6zM6 10.333v5.43a2 2 0 001.106 1.79l.05.025A4 4 0 008.943 18h5.416a2 2 0 001.962-1.608l1.2-6A2 2 0 0015.56 8H12V4a2 2 0 00-2-2 1 1 0 00-1 1v.667a4 4 0 01-.8 2.4L6.8 7.933a4 4 0 00-.8 2.4z" />
                          </svg>
    
                          <p class="text-center text-gray-600">
                            We always perform our projects with the utmost quality and integrity to give the best result.
                        </p>
                    </div>
                </div>
    
                <div class="h-full sm:h-72 px-4 py-5 max-w-md bg-gray-50 border-t-4 border-blue-300 shadow-lg rounded-lg transform translate-y-0 hover:-translate-y-2 transition-transform duration-500">
                    <div class="py-3 border-b-2 border-blue-200">
                        <h1 class="text-2xl font-bold text-gray-600 text-center capitalize">on time</h1>
                    </div>
                    <div class="flex flex-col justify-center items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-blue-300" viewBox="0 0 20 20" fill="currentColor">
                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-12a1 1 0 10-2 0v4a1 1 0 00.293.707l2.828 2.829a1 1 0 101.415-1.415L11 9.586V6z" clip-rule="evenodd" />
                        </svg>
    
                          <p class="text-center text-gray-600">
                            Our projects are never late. They are always completed with care and delivered on time.
                          </p>
                    </div>
                </div>
    
                <div class="h-full sm:h-72 px-4 py-5 max-w-md bg-gray-50 border-t-4 border-blue-300 shadow-lg rounded-lg transform translate-y-0 hover:-translate-y-2 transition-transform duration-500">
                    <div class="py-3 border-b-2 border-blue-200">
                        <h1 class="text-2xl font-bold text-gray-600 text-center capitalize">observant</h1>
                    </div>
                    <div class="flex flex-col justify-center items-center ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-20 w-20 text-blue-300" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                          </svg>
    
                          <p class="text-center text-gray-600">
                            We keep a close eye on every component of our work to ensure nothing is left out even if it is a letter.
                        </p>
                    </div>
                </div>
            </div>
            

        </section>

    </section>


    <!-- SERVICES SECTION -->

    <section class="bg-transparent px-4 py-16 sm:px-6 md:px-12 lg:px-20 xl:px-44 2xl:px-60">
        <section class=" max-w-xl md:max-w-maxa mx-auto space-y-8">
            <div>
                <h1 class=" text-3xl capitalize text-gray-500 text-center font-bold ">our services</h1>
                <p class="text-center text-sm xl:text-base text-gray-600 mt-4">
                    When you talk of excenllent secvices We are the first to look at, with our experience staffs and employee, We provide the best services to our clients   
                </p>
            </div>
            <div class="space-y-8 sm:space-y-10">

                <!-- TRANSLATIONS CONTAINER -->
                <div class=" max-w-sm sm:max-w-full h-full shadow-lg rounded-md overflow-hidden mx-auto sm:grid grid-cols-9 bg-white">
                    <div class="w-full max-h-82 border-blue-700 col-span-4">
                        <img src="img/women-business-laptop-office.jpg" alt="" class="w-full h-full object-cover filter grayscale-0 hover:grayscale transition duration-500">
                    </div>
                    <div class="pt-6 pb-4 px-4 sm:px-8 flex flex-col justify-center items-start col-span-5 relative overflow-hidden">
                        <h1 class="text-2xl md:text-4xl text-gray-600 font-bold relative z-20">01</h1>
                        <div class="w-1 h-6 md:h-10 bg-blue-400 mt-1 relative z-20">

                        </div>
                        <h1 class="uppercase text-xl sm:text-2xl md:text-3xl tracking-tight font-bold text-gray-600 mt-1 relative z-20">translations</h1>
                        <p class="text-sm lg:text-base text-gray-500 mt-2 relative z-20 first-letter:capitalize">how does it feels when you get your document translated, happy right? in Mainlanche we translate and give out the best!.</p>

                        <div class="w-64 h-64 rounded-full filter bg-blue-50 animate-blob absolute -top-32 -left-32"></div>
                        <div class="w-64 h-64 rounded-full filter bg-blue-50 animate-blob animation-delay-2000 absolute top-10 -right-32"></div>
                    </div>
                </div>

                <!-- VIRTUAL ASSISTANCE CONTAINER -->
                <div class=" max-w-sm sm:max-w-full h-full shadow-lg rounded-md overflow-hidden mx-auto sm:grid  grid-cols-9 bg-white">
                    <div class="w-full max-h-82 overflow-hidden border-blue-700 col-span-4 order-1">
                        <img src="img/manlap.jpeg" alt="" class="w-full h-full object-cover filter grayscale-0 hover:grayscale transition duration-500">
                    </div>
                    <div class="pt-6 pb-4 px-4 sm:px-8 flex flex-col justify-center items-start col-span-5 relative overflow-hidden">
                        <h1 class="text-2xl md:text-4xl text-gray-600 font-bold relative z-20">02</h1>
                        <div class="w-1 h-6 md:h-10 bg-blue-400 mt-1 relative z-20">

                        </div>
                        <h1 class="uppercase text-xl sm:text-2xl md:text-3xl tracking-tight font-bold text-gray-600 mt-1 relative z-20">virtual assistance</h1>
                        <p class="text-sm lg:text-base text-gray-500 mt-2 relative z-20 first-letter:capitalize"> we provide the best virtual assistance, with their experience and qualification they produces the best result.</p>

                        <div class="w-64 h-64 rounded-full filter bg-blue-50 animate-blob animation-delay-3000 absolute -top-32 -left-32"></div>
                        <div class="w-64 h-64 rounded-full filter bg-blue-50 animate-blob animation-delay-4000 absolute top-10 -right-32"></div>
                    </div>
                </div>
                
                <!-- CUSTOMER SERVICES CONTAINER -->
                <div class=" max-w-sm sm:max-w-full h-full shadow-lg rounded-md overflow-hidden mx-auto sm:grid grid-cols-9 bg-white">
                    <div class="w-full max-h-82 border-blue-700 col-span-4">
                        <img src="img/women-business-laptop-computer-thumbnail.jpg" alt="" class="w-full h-full object-cover filter grayscale-0 hover:grayscale transition duration-500">
                    </div>
                    <div class="pt-6 pb-4 px-4 sm:px-8 flex flex-col justify-center items-start col-span-5 relative overflow-hidden">
                        <h1 class="text-2xl md:text-4xl text-gray-600 font-bold relative z-20">03</h1>
                        <div class="w-1 h-6 md:h-10 bg-blue-400 mt-1 relative z-20">

                        </div>
                        <h1 class="uppercase text-xl sm:text-2xl md:text-3xl tracking-tight font-bold text-gray-600 mt-1 relative z-20">customer services</h1>
                        <p class="text-sm lg:text-base text-gray-500 mt-2 relative z-20 first-letter:capitalize"> Our customer services are experienced and friendly they could even make you laugh. You will love them when you contact with them. </p>

                        <div class="w-64 h-64 rounded-full filter bg-blue-50 animate-blob animation-delay-2000 absolute -top-32 -left-32"></div>
                        <div class="w-64 h-64 rounded-full filter bg-blue-50 animate-blob animation-delay-3000 absolute top-10 -right-32"></div>
                    </div>
                </div>
            </div>
        </section>
    </section>



    <!-- TESTIMONIES SECTION -->
    <section class="relative">
        <section class="bg-white px-4 py-16 sm:px-6 md:px-12 lg:px-20 xl:px-44 2xl:px-60">
            <section class=" max-w-sm sm:max-w-full md:max-w-maxa mx-auto ">

            <div class="space-y-8 relative z-20">
                    <div>
                        <h1 class=" text-3xl capitalize text-white text-center font-bold ">Awesome Testimonies</h1>
                        <p class="text-center text-sm xl:text-base text-white mt-4">
                            Hear our awesome testimonies from around the world and be marveled   
                        </p>
                    </div>

                    <div class="space-y-4 sm:space-y-0 sm:grid grid-cols-2 lg:grid-cols-4 gap-x-2 gap-y-4 ">

                        <!-- 1ST TESIMONY SECTION -->
                        <div class="bg-white h-96 w-full border-t-2 border-blue-300 shadow-xl transition duration-300 hover:transform hover:-translate-y-2 grid grid-rows-2">
                            <div class="px-4 space-y-3">
                                <div class="mt-2 flex justify-end items-center">
                                    <img src="img/text-quotes-svgrepo-com.svg" alt="" class="block w-8 h-8">
                                </div>
                                <div class="flex flex-col justify-center items-center ">
                                    <p class="text-gray-700 text-sm text-center">I Mound Mainlanche when I needed a Hebrew document translation. It was so hard to find professional and trustable translation service but Mainlanche made everything easier! Highly recommended!
                                    </p>
                                    <div class="flex gap-1 mt-5 lg:mt-2  xl:mt-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
            
                            <div class="grid grid-rows-2 relative">
                                <div class="flex justify-center items-start">
                                    
                                </div>
            
                                <div class="bg-blue-300 pb-4 flex flex-col justify-end items-center">
                                    <p class="text-md -mb-1 uppercase font-black text-white">jenny miranda</p>
                                </div>
            
                                <div class="w-24 h-24 ring-2 ring-offset-2 ring-offset-whitesmoke ring-yellow-500 shadow-inner rounded-full absolute top-1/2 right-1/2 -mt-12 -mr-12">
                                    <img src="img/test1.jpeg" alt="" class="w-24 h-24 object-cover rounded-full">
                                </div>
                            </div>
                        </div>
            
                        <!-- 2ND TESTIMONIES SECTION -->
                        <div class="bg-white h-96 w-full border-t-2 border-blue-300 shadow-xl transition duration-300 hover:transform hover:-translate-y-2 grid grid-rows-2">
                            <div class="px-4 space-y-3">
                                <div class="mt-2 flex justify-end items-center">
                                    <img src="img/text-quotes-svgrepo-com.svg" alt="" class="block w-8 h-8">
                                </div>    
                                <div class="flex flex-col justify-center items-center flex-grow-">
                                    <p class="text-gray-700 text-sm text-center">Their virtual assistance service is fast and good. I'll definitely work with Mainlanche again in the future. Thank you.

                                    </p>
                                    <div class="flex gap-1 mt-5 lg:mt-2  xl:mt-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
            
                            <div class="grid grid-rows-2 relative">
                                <div class="flex justify-center items-start">
                                    
                                </div>
            
                                <div class="bg-blue-300 pb-4 flex flex-col justify-end items-center">
                                    <p class="text-md -mb-1 uppercase font-black text-white">Ava Olivia</p>
                                </div>
            
                                <div class="w-24 h-24 ring-2 ring-offset-2 ring-offset-whitesmoke ring-yellow-500 shadow-inner rounded-full absolute top-1/2 right-1/2 -mt-12 -mr-12">
                                    <img src="img/testm2.jpeg" alt="" class="w-24 h-24 object-cover rounded-full">
                                </div>
                            </div>
                        </div>

                        <!-- 3RD TESTIMONY SECTION -->
                        <div class="bg-white h-96 w-full border-t-2 border-blue-300 shadow-xl transition duration-300 hover:transform hover:-translate-y-2 hidden sm:grid grid-rows-2">
                            <div class="px-4 space-y-3">
                                <div class="mt-2 flex justify-end items-center">
                                    <img src="img/text-quotes-svgrepo-com.svg" alt="" class="block w-8 h-8">
                                </div>
                                <div class="flex flex-col justify-center items-center ">
                                    <p class="text-gray-700 text-sm text-center">They are really professional at business translation, I've benefited from their commercial translation and It was very accurate. Thanks Mainlanche.
                                    </p>
                                    <div class="flex gap-1 mt-5 lg:mt-2  xl:mt-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
            
                            <div class="grid grid-rows-2 relative">
                                <div class="flex justify-center items-start">
                                    
                                </div>
            
                                <div class="bg-blue-300 pb-4 flex flex-col justify-end items-center">
                                    <p class="text-md -mb-1 uppercase font-black text-white">Sopia mia</p>
                                </div>
            
                                <div class="w-24 h-24 ring-2 ring-offset-2 ring-offset-whitesmoke ring-yellow-500 shadow-inner rounded-full absolute top-1/2 right-1/2 -mt-12 -mr-12">
                                    <img src="img/testm3.jpeg" alt="" class="w-24 h-24 object-cover rounded-full">
                                </div>
                            </div>
                        </div>
            
                        <!-- 4TH TESTIMONY SECTION -->
                        <div class="bg-white h-96 w-full border-t-2 border-blue-300 shadow-xl transition duration-300 hover:transform hover:-translate-y-2 hidden sm:grid grid-rows-2">
                            <div class="px-4 space-y-3">
                                <div class="mt-2 flex justify-end items-center">
                                    <img src="img/text-quotes-svgrepo-com.svg" alt="" class="block w-8 h-8">
                                </div>
                                <div class="flex flex-col justify-center items-center ">
                                    <p class="text-gray-700 text-sm text-center">
                                        I was oppurtuned to speak with one of their custormer services and her manner of approach was very good, infact they have ther best customer service.
                                    </p>
                                    <div class="flex gap-1 mt-5 lg:mt-2  xl:mt-5">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
            
                            <div class="grid grid-rows-2 relative">
                                <div class="flex justify-center items-start">
                                    
                                </div>
            
                                <div class="bg-blue-300 pb-4 flex flex-col justify-end items-center">
                                    <p class="text-md -mb-1 uppercase font-black text-white">powell lucas</p>
                                </div>
            
                                <div class="w-24 h-24 ring-2 ring-offset-2 ring-offset-whitesmoke ring-yellow-500 shadow-inner rounded-full absolute top-1/2 right-1/2 -mt-12 -mr-12">
                                    <img src="img/testm4.jpeg" alt="" class="w-24 h-24 object-cover rounded-full">
                                </div>
                            </div>
                        </div>

                    </div>
            </div>

            </section>
        </section>

        <div class="w-full h-96 bg-blue-300 rounded-b-full absolute top-0 right-0 z-0" id="frame">

        </div>  
    </section>

    <!-- CONTACT US SECTION -->

    <section class="bg-gradient-to-r from-green-100 to-transparent px-4 py-16 sm:px-6 md:px-12 lg:px-20 xl:px-44 2xl:px-60">
        <section class=" max-w-sm sm:max-w-full md:max-w-maxa mx-auto ">

            <div class="space-y-8">
                <div>
                    <h1 class=" text-3xl capitalize text-gray-500 text-center font-bold ">contact us </h1>
                    <p class="text-center text-sm capitalize xl:text-base text-gray-600 mt-4">
                        get closer to us by contacting us   
                    </p>
                </div>

                <div class=" md:grid grid-cols-2 gap-4">

                    <!-- THE CONTACT US FORM -->
                    <div class="bg-transparent">
                        <div class="bg-white py-8 px-4 sm:px-12 space-y-5 shadow-xl ">
                            <h1 class=" text-xl capitalize font-bold text-gray-500">get in touch with us</h1>
                            <form action="" method="POST" class="space-y-4 flex flex-col relative">
        
                                <div class="space-y-4">
                                    <div class="relative">
                                        <input type="text" name="Fullname" id="" placeholder="Your Fullname" class="bg-transparent w-full py-3 pr-12 pl-4 text-gray-700 border outline-none ring-2 ring-transparent focus:ring-green-300">
                
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400 absolute top-1/2 right-4 transform -translate-y-1/2 translate-full" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 9a3 3 0 100-6 3 3 0 000 6zm-7 9a7 7 0 1114 0H3z" clip-rule="evenodd" />
                                        </svg>
                                    </div>
                
                                    <div class="relative">
                                        <input type="email" name="email" id="" placeholder="Email Address" class="bg-transparent w-full py-3 pr-12 pl-4 text-gray-700 border outline-none ring-2 ring-transparent focus:ring-green-300">
                
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400 absolute top-1/2 right-4 transform -translate-y-1/2 translate-full" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M2.003 5.884L10 9.882l7.997-3.998A2 2 0 0016 4H4a2 2 0 00-1.997 1.884z" />
                                            <path d="M18 8.118l-8 4-8-4V14a2 2 0 002 2h12a2 2 0 002-2V8.118z" />
                                        </svg>
                                    </div>
                                </div>
            
                                <div class="relative">
                                    <input type="text" name="Country" id="" placeholder="Your Country" class="bg-transparent w-full py-3 pr-12 pl-4 text-gray-700 border outline-none ring-2 ring-transparent focus:ring-green-300">
            
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400 absolute top-1/2 right-4 transform -translate-y-1/2 translate-full" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM4.332 8.027a6.012 6.012 0 011.912-2.706C6.512 5.73 6.974 6 7.5 6A1.5 1.5 0 019 7.5V8a2 2 0 004 0 2 2 0 011.523-1.943A5.977 5.977 0 0116 10c0 .34-.028.675-.083 1H15a2 2 0 00-2 2v2.197A5.973 5.973 0 0110 16v-2a2 2 0 00-2-2 2 2 0 01-2-2 2 2 0 00-1.668-1.973z" clip-rule="evenodd" />
                                      </svg>
                                </div>
            
                                <div class="relative">
                                    <input type="text" name="subject" id="" placeholder="Message subject" class="bg-transparent w-full py-3 pr-12 pl-4 text-gray-700 border outline-none ring-2 ring-transparent focus:ring-green-300">
            
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400 absolute top-1/2 transform -translate-y-1/2 right-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd" />
                                      </svg>
                                </div>
            
                                <div class="relative">
                                    <textarea name="Message" id="" cols="30" rows="10" placeholder="Message Body" class="bg-transparent w-full py-3 px-4 pr-10  border outline-none ring-2 ring-transparent focus:ring-green-300 placeholder-text-gray-800"></textarea>
            
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400 absolute top-4 right-4" viewBox="0 0 20 20" fill="currentColor">
                                        <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                        <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                      </svg>
                                </div>
                                
        
                                <input type="submit" value="Send Now" name="submit" class="bg-green-400 py-3 px-4 max-w-[10rem] hover:bg-blue-400 text-white font-bold ">
                            
            
                                
            
                            </form>
                        </div>
                    </div>

                    <!-- THE OFFICE ADDRESS AND THE OFFICE TIME SECTION -->
                    <div class=" py-8 px-4 space-y-4">
                        <div class="space-y-2">
                            <h1 class="text-xl text-gray-600 font-bold capitalize">contact with us</h1>
                            <p class="text-nom text-gray-600 ">Get in touch with us via any of the available contact details below</p>
                        </div>

                        <div class="group">
                            
                            <div class="float-left mr-2 mb-1 bg-green-400 group-hover:bg-blue-400 w-12 h-12 rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                            </div>
                            
                            <div class="">
                                <h1 class="text-lg text-gray-600 font-bold capitalize">office hour</h1>
                                <p class="text-nom text-gray-600">Everytime Our offices are open 8am to 5pm Monday to Thursday and on Friday to Sartuday, from 8am to 3pm in the evening, Serbian time, excluding Serbian public holidays. Outside of these hours it is best to contact us by e-mail. We will do our best to respond on the next working day. Please be as specific as possible about your requirements, and give full contact details.
                                </p>
                            </div>
                        </div>

                        <div class="group">
                            <div class="float-left mr-2 mb-1 bg-green-400 group-hover:bg-blue-400 w-12 h-12 rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path d="M2 3a1 1 0 011-1h2.153a1 1 0 01.986.836l.74 4.435a1 1 0 01-.54 1.06l-1.548.773a11.037 11.037 0 006.105 6.105l.774-1.548a1 1 0 011.059-.54l4.435.74a1 1 0 01.836.986V17a1 1 0 01-1 1h-2C7.82 18 2 12.18 2 5V3z" />
                                  </svg>
                            </div>
                            
                            <div class=" ">
                                <h1 class="text-lg text-gray-600 font-bold capitalize">Call Us Now</h1>
                                <p class="text-nom text-gray-600">Tel: +302284888000</p>
                            </div>
                        </div>

                        <div class="group">
                            <div class="float-left mr-2 mb-1 bg-green-400 group-hover:bg-blue-400 w-12 h-12 rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                  </svg>
                            </div>
                            
                            <div class=" ">
                                <h1 class="text-lg text-gray-600 font-bold capitalize">Email Us</h1>
                                <p class="text-nom text-gray-600">contact@mainlanche.com</p>
                            </div>
                        </div>

                        <div class="group">
                            <div class="float-left mr-2 mb-1 bg-green-400 group-hover:bg-blue-400 w-12 h-12 rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-white" viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd" />
                                  </svg>
                            </div>
                            
                            <div class=" ">
                                <h1 class="text-lg text-gray-600 font-bold capitalize">Office Address</h1>
                                <p class="text-nom text-gray-600">Majora Milana Malnarića 4, Beograd 11070, Serbia.</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>




        </section>
    </section>

    


    <footer class="bg-gray-600 px-4 py-5 sm:px-6 md:px-12 lg:px-20 xl:px-44 2xl:px-60">
        <section class="max-w-sm sm:max-w-full md:max-w-maxa mx-auto">
            <p class="text-white mx-auto text-center">&copy; Mainlanche 2018-2021   </p>
        </section>
    </footer>




    <!-- <div class="w-96">
        <div class="w-96 h-full bg-green-800 relative">
            <div class="w-32 h-32 bg-blue-500 absolute top-0 right-0"></div>
            <div class=" w-32 h-32 bg-yellow-500 absolute top-32 right-6"></div>
            <div class="w-16 h-16 rounded-full bg-red-400">

            </div>
        </div>
      </div> -->

    <!-- <section class="bg-blue-700">

        <div class="h-24 w-32 px-4 bg-blue-900">
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque placeat voluptatum, similique animi quos sapiente ex temporibus obcaecati ducimus tempore aliquid deserunt quisquam repellendus voluptatem commodi omnis reprehenderit nam. Ex?</p>
        </div>

    </section> -->



    




    <script src="index.js"></script>

    <script src="//code.jivosite.com/widget/Lw9e7P7U9f&quot;" async="true"></script>

</body>
</html>
<?php
if(filter_has_var(INPUT_POST , 'submit')){
    $mailto = "adetayoomotomiwa99@gmail.com";
    $from = $_POST["email"];
    $fullName = $_POST["Fullname"];
    $country = $_POST["Country"];
    $sub = $_POST["subject"];
    $text = $_POST["Message"];
    $subject = "Your Message Submitted Succcessfully | WEBSITE TITLE";
    $message = "Client Name: ". $fullName . "\n\n" . "From" . "\n\n" .  $Country . "\n\n" . "Wrote the following message: ". "\n\n". $text;
    $message2= "Dear ". $fullName. "\n\n". "Thank You for contacting us! We will reach out to you shortly \n\n Pathway Dreams Academy";
    $headers = "From ". $from;
    $headers2 = "From ". $mailto;
    $result = mail($mailto, "New Message From Client", $message, $headers);
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
    <title>Mainlanche/Contact us</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body class="text-nom xl:text-base font-nunito bg-gray-100">
    <!-- THE NAV SECTION -->

    <section class="bg-gradient-to-b from-gray-500 to-gray-700 px-4 py-3 lg:py-6 sm:px-6 md:px-12 lg:px-20 xl:px-36 relative z-20">
        <section class="max-w-xl sm:max-w-xl md:max-w-maxa mx-auto flex justify-between items-center">

            <!-- THE LOGO -->
            <div class="text-2xl lg:text-4xl text-white uppercase font-black">
                <img src="img/logo-with-circle.png" alt="" class="w-8 h-8 sm:w-10 sm:h-10 inline">
                <span class="font-serif">Mainlanche</span>
            </div>

            <!-- THE NAV ITEM FOR LARGE SCREENS -->
            <div class="hidden lg:flex justify-between items-center space-x-8">
                <a href="index.php" class="text-white uppercase font-black border-b-0 hover:border-b-4 hover:text-white ">home</a>
                <a href="about.html" class="text-white uppercase font-black border-b-0 hover:border-b-4 hover:text-white ">about</a>
                <a href="directors.html" class="text-white uppercase font-black border-b-0 hover:border-b-4 hover:text-white">directors</a>
                <a href="employment.html" class="text-white uppercase font-black border-b-0 hover:border-b-4 hover:text-white">employment</a>
                <a href="contact-us.php" class="text-white uppercase font-black border-b-0 hover:border-b-4 hover:text-white">contact us</a>
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

    <!-- CONTACT US SECTION -->

    <section class="relative">
        <section class=" px-4 py-16 sm:px-6 md:px-12 lg:px-20 xl:px-44 2xl:px-60 relative">
            <section class=" max-w-sm sm:max-w-full md:max-w-maxa mx-auto ">
    
                <div class=" space-y-8 relative z-20 ">
                    <div>
                        <h1 class=" text-3xl capitalize text-white text-center font-bold ">contact us </h1>
                        <p class="text-center text-sm capitalize xl:text-base text-white mt-4">
                            get closer to us by contacting us   
                        </p>
                    </div>
    
                    <div class="bg-transparent md:bg-white md:grid grid-cols-2 gap-4 shadow-xl">
    
                        <!-- THE CONTACT US FORM -->
                        <div class="bg-transparent">
                            <div class="bg-white py-8 px-4 sm:px-12 space-y-5 ">
                                <h1 class=" text-xl capitalize font-bold text-gray-500">get in touch with us</h1>
                                <form  method="POST" id="form" class="space-y-4 flex flex-col relative">
            
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
                                        <textarea name="MessageBody" id="" cols="30" rows="10" placeholder="Message Body" class="bg-transparent w-full py-3 px-4 pr-10  border outline-none ring-2 ring-transparent focus:ring-green-300 placeholder-text-gray-800"></textarea>
                
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400 absolute top-4 right-4" viewBox="0 0 20 20" fill="currentColor">
                                            <path d="M17.414 2.586a2 2 0 00-2.828 0L7 10.172V13h2.828l7.586-7.586a2 2 0 000-2.828z" />
                                            <path fill-rule="evenodd" d="M2 6a2 2 0 012-2h4a1 1 0 010 2H4v10h10v-4a1 1 0 112 0v4a2 2 0 01-2 2H4a2 2 0 01-2-2V6z" clip-rule="evenodd" />
                                          </svg>
                                    </div>
                                    
            
                                    <input type="submit" value="Send Now" name="submit" id="submitBtn" class="bg-green-400 py-3 px-4 max-w-[10rem] hover:bg-blue-400 text-white font-bold ">
                                
                
                                    
                
                                </form>
                            </div>
                        </div>
    
                        <!-- THE OFFICE ADDRESS AND THE OFFICE TIME SECTION -->
                        <div class="bg-white py-8 px-4 space-y-4">
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
                                    <p class="text-nom text-gray-600">Anytime Our offices are open 8am to 5pm Monday to Thursday and on Friday to Sartuday, from 8am to 3pm in the evening, Serbian time, excluding Serbian public holidays. Outside of these hours it is best to contact us by e-mail. We will do our best to respond on the next working day. Please be as specific as possible about your requirements, and give full contact details.
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
    
        <section class="bg-mainlanche-img bg-gray-500 bg-cover bg-no-repeat bg-center bg-blend-multiply  w-full h-[36rem] pt-8 absolute z-10 inset-0 ">
            <!-- <h1 class="text-5xl capitalize text-center text-white text-shadow-md font-black">about us</h1> -->
        </section>
    
    </section>

    

    <footer class="bg-gray-600 px-4 py-5 sm:px-6 md:px-12 lg:px-20 xl:px-44 2xl:px-60">
        <section class="max-w-sm sm:max-w-full md:max-w-maxa mx-auto">
            <p class="text-white mx-auto text-center">&copy; Mainlanche 2018-2021   </p>
        </section>
    </footer>

    



    <script src="index.js"></script>

    <script src="//code.jivosite.com/widget/Lw9e7P7U9f&quot;" async="true"></script>

</body>
</html>
<?php
session_start();
$connection = mysqli_connect("localhost","root","","bus booking");
$db = mysqli_select_db($connection, 'feedback');

if(isset($_POST['submit']) && ($_POST['submit']=="send"))
{
	$Email_Id=$_POST['Email'];
  $Message=$_POST['Message'];

$sql1="select * from feedback where Email='$Email'";
$rs1=mysqli_query($connection,$sql1);

$sql="insert into feedback (Email,Message) VALUES ('$Email' ,'$Message')";
$query_run = mysql_query($connection,$sql);
$rs=mysqli_query($connection,$sql);
if($query_run)
{
 
}
else
{
  
}
}

?>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Contact Us</title>

    <link rel="stylesheet" type="text/css" href="css/contactus.css">
    <link rel="stylesheet" type="text/css" href="css/NNP_stylesheet.css">
</head>

<body>
    <header>
        <div class="title">
            <h1>Easy Journey</h1>
        </div>
        <div class=main>

            <a href="0index.php">Home</a>

            <div class="logo">
                <img src="/bus booking/logo/logo.png">
            </div>

            <div class="box">
                <h1> Mail-Id </h1>
                <p>
                    <br>
                    Akash Saha : mr.akashsaha574@gmail.com
                    <br>
                    NarendraNath Panda : mr.narendranathpanda@gmail.com
                </p>
                < <h1> Phone Number</h1>
                    <br>
                    <p>
                        Akash Saha : 6289061862
                        <br>
                        Narendranath Panda : 7432828388 or 8637333686

                    </p>
                    <br>
                    <h1> Location</h1>
                    <br>
                    <p>
                        Country : India<br>
                        State : West Bengal<br>
                        District : North 24 Parganas<br>
                        Barasat <br>
                        PIN : 700126

                    </p>
            </div>


    </header>
    <hr>
    <hr>
    <section class="text-gray-600 body-font relative">
        <div class="absolute inset-0 bg-gray-300">
            <iframe width="100%" height="100%" frameborder="0" marginheight="0" marginwidth="0" title="map"
                scrolling="no"
                src="https://maps.google.com/maps?width=100%&height=600&hl=en&q=%C4%B0india,WestBengal,Kolkata+(My%20Business%20Name)&ie=UTF8&t=&z=14&iwloc=B&output=embed"
                style="filter: grayscale(1) contrast(1.2) opacity(0.4);"></iframe>
        </div>
        <div class="container px-5 py-24 mx-auto flex">
            <div
                class="lg:w-1/3 md:w-1/2 bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">Feedback</h2>
                <p class="leading-relaxed mb-5 text-gray-600">Plice Feedback your exprience</p>
                <div class="relative mb-4">
                    <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                    <input type="email" id="email" name="email"
                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                </div>
                <div class="relative mb-4">
                    <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                    <textarea id="message" name="message"
                        class="w-full bg-white rounded border border-gray-300 focus:border-indigo-500 focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                </div>
                <button
                    class="text-white bg-indigo-500 border-0 py-2 px-6 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
                <p class="text-xs text-gray-500 mt-3">India's largest online bus ticketing platform.
                    trusted by over 1 million indians..</p>
            </div>
        </div>
    </section>
    <hr>
    <section class="text-gray-600 body-font relative">
        <div class="container px-5 py-24 mx-auto">
            <div class="flex flex-col text-center w-full mb-12">
                <h1 class="sm:text-3xl text-2xl font-medium title-font mb-4 text-gray-900">Contact Us</h1>
                <p class="lg:w-2/3 mx-auto leading-relaxed text-base">India's largest online bus ticketing
                    platform.Trusted by over 1 million indians.</p>
            </div>
            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                <div class="flex flex-wrap -m-2">
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                            <input type="text" id="name" name="name"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div class="p-2 w-1/2">
                        <div class="relative">
                            <label for="email" class="leading-7 text-sm text-gray-600">Email</label>
                            <input type="email" id="email" name="email"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <div class="relative">
                            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                            <textarea id="message" name="message"
                                class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        </div>
                    </div>
                    <div class="p-2 w-full">
                        <button
                            class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Send</button>
                    </div>
                    <div class="p-2 w-full pt-8 mt-8 border-t border-gray-200 text-center">
                        <a class="text-indigo-500">easyjourneyteam@gmail.com</a>
                        <p class="leading-normal my-5">Barasat.
                            <br>Chapadali,Titumir Bus Stand
                        </p>
                        <span class="inline-flex">
                            <a class="text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"></path>
                                </svg>
                            </a>
                            <a class="ml-4 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z">
                                    </path>
                                </svg>
                            </a>
                            <a class="ml-4 text-gray-500">
                                <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" class="w-5 h-5" viewBox="0 0 24 24">
                                    <rect width="20" height="20" x="2" y="2" rx="5" ry="5"></rect>
                                    <path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37zm1.5-4.87h.01"></path>
                                </svg>
                            </a>
                            <a class="ml-4 text-gray-500">
                                <svg fill="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    class="w-5 h-5" viewBox="0 0 24 24">
                                    <path
                                        d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z">
                                    </path>
                                </svg>
                            </a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>
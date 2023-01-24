@extends('pages.template.layout')

@section('content')

        <!-- Start Section-->
        <section class="relative md:pb-24 md:pt-40 pb-16 pt-36">
            <div class="container">
                <div class="grid md:grid-cols-12 grid-cols-1 gap-[30px]">
                    <div class="lg:col-span-8 md:col-span-6">
                        <div class="p-6 rounded-md shadow dark:shadow-gray-800">

                            <img src="assets/images/blog/slide02.jpg" class="rounded-md" alt="">

                            <div class="text-center mt-12">
                                <span class="bg-indigo-600 text-white text-xs font-semibold px-2.5 py-0.5 rounded-full h-5 ml-1">Technology</span>
                                <h3 class="my-3 text-[26px] font-semibold">My Very Minimal <br> Interior Design Ideas</h3>

                                <ul class="list-none mt-6">
                                    <li class="inline-block font-semibold text-slate-400 mx-4"> <span class="text-slate-900 dark:text-white block">Client :</span> <span class="block">Calvin Carlo</span></li>
                                    <li class="inline-block font-semibold text-slate-400 mx-4"> <span class="text-slate-900 dark:text-white block">Date :</span> <span class="block">23th May, 2022</span></li>
                                    <li class="inline-block font-semibold text-slate-400 mx-4"> <span class="text-slate-900 dark:text-white block">Time :</span> <span class="block">8 Min Read</span></li>
                                </ul>
                            </div>

                            <div class="mt-6">
                                <p class="text-slate-400">The most well-known dummy text is the 'Lorem Ipsum', which is said to have originated in the 16th century. Lorem Ipsum is composed in a pseudo-Latin language which more or less corresponds to 'proper' Latin. It contains a series of real Latin words. This ancient dummy text is also incomprehensible, but it imitates the rhythm of most European languages in Latin script.</p>
                                <p class="text-slate-400 italic border-x-4 border-indigo-600 rounded-tl-xl rounded-br-xl mt-3 p-3">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. "</p>
                                <p class="text-slate-400 mt-3">The advantage of its Latin origin and the relative meaninglessness of Lorum Ipsum is that the text does not attract attention to itself or distract the viewer's attention from the layout.</p>
                            </div>
                        </div>

                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                            <h5 class="text-lg font-semibold">Comments:</h5>

                            <div class="mt-8">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="assets/images/client/01.jpg" class="h-11 w-11 rounded-full shadow" alt="">
    
                                        <div class="ml-3 flex-1">
                                            <a href="" class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Calvin Carlo</a>
                                            <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                        </div>
                                    </div>

                                    <a href="" class="text-slate-400 hover:text-indigo-600 transition-all duration-500 ease-in-out ml-5"><i class="mdi mdi-reply"></i> Reply</a>
                                </div>
                                <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                    <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="assets/images/client/02.jpg" class="h-11 w-11 rounded-full shadow" alt="">
    
                                        <div class="ml-3 flex-1">
                                            <a href="" class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Calvin Carlo</a>
                                            <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                        </div>
                                    </div>

                                    <a href="" class="text-slate-400 hover:text-indigo-600 transition-all duration-500 ease-in-out ml-5"><i class="mdi mdi-reply"></i> Reply</a>
                                </div>
                                <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                    <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="assets/images/client/03.jpg" class="h-11 w-11 rounded-full shadow" alt="">
    
                                        <div class="ml-3 flex-1">
                                            <a href="" class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Calvin Carlo</a>
                                            <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                        </div>
                                    </div>

                                    <a href="" class="text-slate-400 hover:text-indigo-600 transition-all duration-500 ease-in-out ml-5"><i class="mdi mdi-reply"></i> Reply</a>
                                </div>
                                <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                    <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                </div>
                            </div>

                            <div class="mt-8">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center">
                                        <img src="assets/images/client/04.jpg" class="h-11 w-11 rounded-full shadow" alt="">
    
                                        <div class="ml-3 flex-1">
                                            <a href="" class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Calvin Carlo</a>
                                            <p class="text-sm text-slate-400">6th May 2022 at 01:25 pm</p>
                                        </div>
                                    </div>

                                    <a href="" class="text-slate-400 hover:text-indigo-600 transition-all duration-500 ease-in-out ml-5"><i class="mdi mdi-reply"></i> Reply</a>
                                </div>
                                <div class="p-4 bg-gray-50 dark:bg-slate-800 rounded-md shadow dark:shadow-gray-800 mt-6">
                                    <p class="text-slate-400 italic">" There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour "</p>
                                </div>
                            </div>
                        </div>

                        <div class="p-6 rounded-md shadow dark:shadow-gray-800 mt-8">
                            <h5 class="text-lg font-semibold">Leave A Comment:</h5>

                            <form class="mt-8">
                                <div class="grid lg:grid-cols-12 lg:gap-6">
                                    <div class="lg:col-span-6 mb-5">
                                        <div class="text-left">
                                            <label for="name" class="font-semibold">Your Name:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="user" class="w-4 h-4 absolute top-3 left-4"></i>
                                                <input name="name" id="name" type="text" class="form-input pl-11" placeholder="Name :">
                                            </div>
                                        </div>
                                    </div>
    
                                    <div class="lg:col-span-6 mb-5">
                                        <div class="text-left">
                                            <label for="email" class="font-semibold">Your Email:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="mail" class="w-4 h-4 absolute top-3 left-4"></i>
                                                <input name="email" id="email" type="email" class="form-input pl-11" placeholder="Email :">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="grid grid-cols-1">
                                    <div class="mb-5">
                                        <div class="text-left">
                                            <label for="comments" class="font-semibold">Your Comment:</label>
                                            <div class="form-icon relative mt-2">
                                                <i data-feather="message-circle" class="w-4 h-4 absolute top-3 left-4"></i>
                                                <textarea name="comments" id="comments" class="form-input pl-11 h-28" placeholder="Message :"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" id="submit" name="send" class="btn bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-md w-full">Send Message</button>
                            </form>
                        </div>
                    </div>

                    <div class="lg:col-span-4 md:col-span-6">
                        <div class="sticky top-20">
                            <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center">Author</h5>
                            <div class="text-center mt-8">
                                <img src="assets/images/client/05.jpg" class="h-24 w-24 mx-auto rounded-full shadow mb-4" alt="">

                                <a href="" class="text-lg font-semibold hover:text-indigo-600 transition-all duration-500 ease-in-out">Cristina Romsey</a>
                                <p class="text-slate-400">Content Writer</p>
                            </div>

                            <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Recent post</h5>
                            <div class="flex items-center mt-8">
                                <img src="assets/images/blog/06.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                                <div class="ml-3">
                                    <a href="" class="font-semibold hover:text-indigo-600">Consultant Business</a>
                                    <p class="text-sm text-slate-400">1st May 2022</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center mt-4">
                                <img src="assets/images/blog/07.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                                <div class="ml-3">
                                    <a href="" class="font-semibold hover:text-indigo-600">Grow Your Business</a>
                                    <p class="text-sm text-slate-400">1st May 2022</p>
                                </div>
                            </div>
                            
                            <div class="flex items-center mt-4">
                                <img src="assets/images/blog/08.jpg" class="h-16 rounded-md shadow dark:shadow-gray-800" alt="">

                                <div class="ml-3">
                                    <a href="" class="font-semibold hover:text-indigo-600">Look On The Glorious Balance</a>
                                    <p class="text-sm text-slate-400">1st May 2022</p>
                                </div>
                            </div>

                            <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Social sites</h5>
                            <ul class="list-none text-center mt-8">
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="facebook" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="instagram" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="twitter" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="linkedin" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="github" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="youtube" class="h-4 w-4"></i></a></li>
                                <li class="inline"><a href="" class="btn btn-icon btn-sm border border-gray-100 dark:border-gray-800 rounded-md text-slate-400 hover:border-indigo-600 hover:text-white hover:bg-indigo-600"><i data-feather="gitlab" class="h-4 w-4"></i></a></li>
                            </ul><!--end icon-->

                            <h5 class="text-lg font-semibold bg-gray-50 dark:bg-slate-800 shadow dark:shadow-gray-800 rounded-md p-2 text-center mt-8">Tagscloud</h5>
                            <ul class="list-none text-center mt-8">
                                <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Business</a></li>
                                <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Finance</a></li>
                                <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Marketing</a></li>
                                <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Fashion</a></li>
                                <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Bride</a></li>
                                <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Lifestyle</a></li>
                                <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Travel</a></li>
                                <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Beauty</a></li>
                                <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Video</a></li>
                                <li class="inline-block m-2"><a href="" class="px-3 py-1 text-slate-400 hover:text-white dark:hover:text-white bg-gray-50 dark:bg-slate-800 text-sm hover:bg-indigo-600 dark:hover:bg-indigo-600 rounded-md shadow dark:shadow-gray-800 transition-all duration-500 ease-in-out">Audio</a></li>
                            </ul>
                        </div>
                    </div>
                </div><!--end grid-->
            </div><!--end container-->

            <div class="container md:mt-24 mt-16">
                <div class="md:flex justify-center">
                    <div class="lg:w-2/3 text-center">
                        <h3 class="md:text-3xl text-2xl md:leading-normal leading-normal font-semibold mb-6">Subscribe our weekly subscription</h3>

                        <p class="text-slate-400 max-w-xl mx-auto">Add some text to explain benefits of subscripton on your services. We'll send you the best of our blog just once a weekly.</p>

                        <div class="mt-8">
                            <div class="text-center subcribe-form">
                                <form class="relative mx-auto max-w-xl">
                                    <input type="email" id="subemail" name="name" class="pt-4 pr-40 pb-4 pl-6 w-full h-[50px] outline-none text-black dark:text-white rounded-full bg-white/70 dark:bg-slate-900/70 border border-gray-100 dark:border-gray-700" placeholder="Enter your email id..">
                                    <button type="submit" class="btn absolute top-[2px] right-[3px] h-[46px] bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white rounded-full">Subcribe Now</button>
                                </form><!--end form-->
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end container-->
        </section><!--end section-->
        <!-- End -->


    <div class="pb-16 lg:pb-24 bg-white dark:bg-gray-900 hidden">
        <article>
            <section>
                <div class="mx-auto max-w-screen-xl px-4 pb-16 sm:px-6 sm:pb-24 lg:px-8">
                    <h2 class="text-3xl font-bold sm:text-4xl">
                        Deep Rooted Thoughts from the CEO of Fidelis Group
                    </h2>

                    <div class="mt-8 grid grid-cols-1 gap-8 lg:grid-cols-1 lg:gap-16">
                        <div class="relative">
                            <img alt="Party" src="https://fidelisgroup.in/wp-content/uploads/2021/07/From-Fidelis-CEO.png" class="inset-0 h-full w-full object-cover" />
                        </div>

                        <div class="lg:py-16 grid grid-cols-3 gap-3">
                            <article class="space-y-4 text-gray-600 col-span-2">

                                    <p>I remember as if it was still yesterday, we had just laid down the foundation of Fidelis Group in the year 2010. All these 11 years of putting up a robust business have been quite challenging as well as interesting at the same time. I always believe that mitigating risks from a strong perspective of finance is what helps businesses to strive in all situations. Also, there are some key elements that we miss out on during the everyday hustle of running a huge company, those include analyzing situations from the root cause and giving it an investment perspective twist to handle certain scenarios. I also stand strongly on the need to acquire regular feedbacks, recommendations, and support from those who are working for Fidelis Group.</p>
                                    <p><strong>We Value Mental Health of Employees<br>
                                    </strong>The heart and soul of a company are its valuable human resource. All year round the employees of the Fidelis Group contribute towards development, sustainability, innovative inventions, cracking promising deals for the company, and much more, to help in gaining an upper edge for our company globally. Therefore, nourishing the mental well-being of the employees is my top priority. The HR team at Fidelis Group is constantly in touch with the members to check the status of mental health and well-being. Moreover, one way to eliminate stress and isolation at the workplace is to engage employees in fun and games activities. We keep up a lively atmosphere at the workplace to avoid a monotonous routine. We promote a healthy social environment to build team spirit, create an interesting and enjoyable workplace.<strong><br>
                                    </strong></p>
                                    <p>Furthermore, team leaders play a vital role in bestowing confidence in the members and assuring them that we are with them through thick and thin. Also, Fidelis Group is on the verge of establishing an ‘Employee Assistance Program’ to aid in the well-being of members. We are in partnership with a few organizations which assist our employees in living a healthy lifestyle.</p>
                                    <p><strong>Skill Building Promotes Growth<br>
                                    </strong>As the CEO of Fidelis Group, I think the most important aspect of growth is keeping ourselves up-to-date about recent happenings in the world. The much-awaited digital era has become a reality due to the outbreak of the coronavirus infection. The Covid-19 pandemic has resulted in a shift towards digital platforms such as artificial intelligence, machine learning, the Internet of Things, augmented reality, and much more. Therefore, we need to learn all technical aspects to keep the company on its toes. Skill building is a crucial niche in today’s time as it develops a growth mindset and rewires the neurons in the brain to harbor a critical thinking process. In addition, honing our in-built capabilities along with adopting new abilities develops a powerful brain mechanism, which is useful in the long run for the members of Fidelis. Therefore, at Fidelis Group we conduct various workshops, seminars, discussions, and talks to inculcate novel skills in the team members. Further, we emphasize upgrading our existing team first, rather than hiring from the market. This way, we grow as a team and boost confidence in the employees from the core.</p>
                                    <p><strong>The Things You Regret Most in Life are the Risks You didn’t Take<br>
                                    </strong>We are often told since childhood not to take risks and try to lead a simple life. However, I think otherwise. A life without risks holds no meaning at all. We at Fidelis Group encourage all our employees to take calculated and smart risks that will result in something meaningful. The leadership team at Fidelis will lead by example of risk-taking. We cultivate a risk-taking atmosphere for the employees by defining a fixed set of parameters. Also, we create a space where employees feel trusted and won’t be judged if they face failures. But rather dwell on a learning perspective via failures and reward those who take risks even if they don’t pay off. Fidelis is always on the lookout for people who are willing to take smart risks to surge business.</p>
                                    <p><strong>Major Growth Milestones at Fidelis<br>
                                    </strong></p>
                                    <ul>
                                    <li>We signed up a Retail Giant in 2011 to start our staffing journey with 25 resources, and by 2014 we had achieved total strength of 500 resources. Also, we became a part of the skill development program with NSDC.</li>
                                    <li>In 2016, we launched the first skill development program by the name DDUGKY and set up training centers in the rural Karnataka region.</li>
                                    <li>In 2017, we achieved another milestone by touching the total strength of 1000 resources.</li>
                                    <li>In 2019, we grew to 2000 resources and became an Aggregator for SOW Business for one of the biggest IT conglomerates in India.</li>
                                    <li>In 2021, despite the Covid-19 pandemic, we closed the year with a revenue of 100-crore and extend our global reach in APAC by opening a branch office in Singapore.</li>
                                    </ul>
                                    <p><strong>Measures Taken at Fidelis Group for New Recruits</strong></p>
                                    <ul>
                                    <li>New joiners will be made aware of the current pandemic scenario and all the necessary help will be provided to them by the respective team.</li>
                                    <li>They are provided with all the required hardware and software, to avoid facilitating the same.</li>
                                    <li>They are stimulated by the essential communication tools.</li>
                                    <li>Recruits are made aware of their colleagues and their immediate managers.</li>
                                    <li>They will be given contact details and whom to connect with in case of an emergency.</li>
                                    <li>The HR team will be constantly in touch to ensure that they are comfortable with the organization’s culture.</li>
                                    </ul>
                                    <p><strong>Message for those Who Want to Work with Us<br>
                                    </strong>Fidelis Group is a family with team members working for 8-10 years. We offer ample growth opportunities for employees and create the best working atmosphere. Our priority lies with the current members in terms of promotions or appraisals which are based on abilities and skills. Also, we conduct monthly events to ease off the pressure from the team members and have a blissful time with colleagues. Fidelis is primarily driven by its core values since its inception and we adhere to them at all times.<strong><br>
                                    </strong></p>
                
                            </article>

                            <aside aria-label="Sidebar" class="relative">
                                <div class="px-3 py-4 overflow-y-auto rounded bg-gray-50 dark:bg-gray-800 sticky top-0 left-0 right-0">
                                <ul class="space-y-2">
                                    <li>
                                        <input type="search" name="" id="">
                                    </li>
                                    <li>
                                        <h3>RECENT POSTS</h3>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <span class="flex-1 ml-3 whitespace-nowrap">NOC an awesome framework</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <span class="flex-1 ml-3 whitespace-nowrap">SOC the Ultimate software never seen before</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 rounded-lg dark:text-white hover:bg-gray-100 dark:hover:bg-gray-700">
                                            <span class="flex-1 ml-3 whitespace-nowrap">Deep Rooted thoughts from the CEO of Fidelis Group</span>
                                        </a>
                                    </li>
                                </ul>
                                <br>
                                <h3>Categories</h3>
                                <ul class="pt-4 mt-4 space-y-2 border-t border-gray-200 dark:border-gray-700">
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                            <span class="ml-4">Upgrade to Pro</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                            <span class="ml-3">Documentation</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                            <span class="ml-3">Components</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="flex items-center p-2 text-base font-normal text-gray-900 transition duration-75 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-700 dark:text-white group">
                                            <span class="ml-3">Help</span>
                                        </a>
                                    </li>
                                </ul>
                                <h3>REQUEST A CALL BACK</h3>
                                <section class="bg-white dark:bg-gray-900">
                                    <div class="py-8 lg:py-16 px-4 mx-auto max-w-screen-md">
                                        <form action="#" class="space-y-8">
                                            <div>
                                                <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Your email</label>
                                                <input type="email" id="email" class="shadow-sm bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="name@flowbite.com" required>
                                            </div>
                                            <div>
                                                <label for="subject" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Subject</label>
                                                <input type="text" id="subject" class="block p-3 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 shadow-sm focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500 dark:shadow-sm-light" placeholder="Let us know how we can help you" required>
                                            </div>
                                            <div class="sm:col-span-2">
                                                <label for="message" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-400">Your message</label>
                                                <textarea id="message" rows="6" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg shadow-sm border border-gray-300 focus:ring-primary-500 focus:border-primary-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-primary-500 dark:focus:border-primary-500" placeholder="Leave a comment..."></textarea>
                                            </div>
                                            <button type="submit" class="py-3 px-5 text-sm font-medium text-center text-white rounded-lg bg-primary-700 sm:w-fit hover:bg-primary-800 focus:ring-4 focus:outline-none focus:ring-primary-300 dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Send message</button>
                                        </form>
                                    </div>
                                  </section>
                                </div>
                            </aside>
 
                        </div>
                    </div>
                </div>
            </section>
        </article>

        <div class="flex justify-between px-4 mx-auto max-w-screen-xl ">
            <section class="not-format">
                <div class="flex justify-between items-center mb-6">
                    <h2 class="text-lg lg:text-2xl font-bold text-gray-900 dark:text-white">Discussion (20)</h2>
                </div>
                <form class="mb-6">
                    <div
                        class="py-2 px-4 mb-4 bg-white rounded-lg rounded-t-lg border border-gray-200 dark:bg-gray-800 dark:border-gray-700">
                        <label for="comment" class="sr-only">Your comment</label>
                        <textarea id="comment" rows="6"
                            class="px-0 w-full text-sm text-gray-900 border-0 focus:ring-0 dark:text-white dark:placeholder-gray-400 dark:bg-gray-800"
                            placeholder="Write a comment..." required></textarea>
                    </div>
                    <button type="submit"
                        class="inline-flex items-center py-2.5 px-4 text-xs font-medium text-center text-white bg-primary-700 rounded-lg focus:ring-4 focus:ring-primary-200 dark:focus:ring-primary-900 hover:bg-primary-800">
                        Post comment
                    </button>
                </form>
                <article class="p-6 mb-6 text-base bg-white rounded-lg dark:bg-gray-900">
                    <footer class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                    class="mr-2 w-6 h-6 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-2.jpg"
                                    alt="Michael Gough">Michael Gough</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-08"
                                    title="February 8th, 2022">Feb. 8, 2022</time></p>
                        </div>
                        <button id="dropdownComment1Button" data-dropdown-toggle="dropdownComment1"
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            type="button">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                </path>
                            </svg>
                            <span class="sr-only">Comment settings</span>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownComment1"
                            class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownMenuIconHorizontalButton">
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                </li>
                            </ul>
                        </div>
                    </footer>
                    <p>Very straight-to-point article. Really worth time reading. Thank you! But tools are just the
                        instruments for the UX designers. The knowledge of the design tools are as important as the
                        creation of the design strategy.</p>
                    <div class="flex items-center mt-4 space-x-4">
                        <button type="button"
                            class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            Reply
                        </button>
                    </div>
                </article>
                <article class="p-6 mb-6 ml-6 lg:ml-12 text-base bg-white rounded-lg dark:bg-gray-900">
                    <footer class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                    class="mr-2 w-6 h-6 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg" alt="Jese Leos">Jese
                                Leos</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-02-12"
                                    title="February 12th, 2022">Feb. 12, 2022</time></p>
                        </div>
                        <button id="dropdownComment2Button" data-dropdown-toggle="dropdownComment2"
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            type="button">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                </path>
                            </svg>
                            <span class="sr-only">Comment settings</span>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownComment2"
                            class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownMenuIconHorizontalButton">
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                </li>
                            </ul>
                        </div>
                    </footer>
                    <p>Much appreciated! Glad you liked it ☺️</p>
                    <div class="flex items-center mt-4 space-x-4">
                        <button type="button"
                            class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            Reply
                        </button>
                    </div>
                </article>
                <article
                    class="p-6 mb-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <footer class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                    class="mr-2 w-6 h-6 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-3.jpg"
                                    alt="Bonnie Green">Bonnie Green</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-03-12"
                                    title="March 12th, 2022">Mar. 12, 2022</time></p>
                        </div>
                        <button id="dropdownComment3Button" data-dropdown-toggle="dropdownComment3"
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            type="button">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                </path>
                            </svg>
                            <span class="sr-only">Comment settings</span>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownComment3"
                            class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200"
                                aria-labelledby="dropdownMenuIconHorizontalButton">
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                </li>
                                <li>
                                    <a href="#"
                                        class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                </li>
                            </ul>
                        </div>
                    </footer>
                    <p>The article covers the essentials, challenges, myths and stages the UX designer should consider
                        while creating the design strategy.</p>
                    <div class="flex items-center mt-4 space-x-4">
                        <button type="button"
                            class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            Reply
                        </button>
                    </div>
                </article>
                <article class="p-6 text-base bg-white border-t border-gray-200 dark:border-gray-700 dark:bg-gray-900">
                    <footer class="flex justify-between items-center mb-2">
                        <div class="flex items-center">
                            <p class="inline-flex items-center mr-3 text-sm text-gray-900 dark:text-white"><img
                                    class="mr-2 w-6 h-6 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-4.jpg"
                                    alt="Helene Engels">Helene Engels</p>
                            <p class="text-sm text-gray-600 dark:text-gray-400"><time pubdate datetime="2022-06-23"
                                    title="June 23rd, 2022">Jun. 23, 2022</time></p>
                        </div>
                        <button id="dropdownComment4Button" data-dropdown-toggle="dropdownComment4"
                            class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-400 bg-white rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-50 dark:bg-gray-900 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                            type="button">
                            <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6 10a2 2 0 11-4 0 2 2 0 014 0zM12 10a2 2 0 11-4 0 2 2 0 014 0zM16 12a2 2 0 100-4 2 2 0 000 4z">
                                </path>
                            </svg>
                        </button>
                        <!-- Dropdown menu -->
                        <div id="dropdownComment4"
                            class="hidden z-10 w-36 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700 dark:divide-gray-600">
                            <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconHorizontalButton">
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Edit</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Remove</a>
                                </li>
                                <li>
                                    <a href="#" class="block py-2 px-4 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Report</a>
                                </li>
                            </ul>
                        </div>
                    </footer>
                    <p>Thanks for sharing this. I do came from the Backend development and explored some of the tools to
                        design my Side Projects.</p>
                    <div class="flex items-center mt-4 space-x-4">
                        <button type="button"
                            class="flex items-center text-sm text-gray-500 hover:underline dark:text-gray-400">
                            <svg aria-hidden="true" class="mr-1 w-4 h-4" fill="none" stroke="currentColor"
                                viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z">
                                </path>
                            </svg>
                            Reply
                        </button>
                    </div>
                </article>
            </section>
            </article>
        </div>
    </div>

    <aside aria-label="Related articles" class="py-8 lg:py-24 dark:bg-gray-800 hidden">
        <div class="px-4 mx-auto max-w-screen-xl">
            <h2 class="mb-8 text-2xl font-bold text-gray-900 dark:text-white">Related articles</h2>
            <div class="grid gap-12 sm:grid-cols-2 lg:grid-cols-4">
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-1.png"
                            class="mb-5 rounded-lg" alt="Image 1">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Our first office</a>
                    </h2>
                    <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone
                        many changes! After months of preparation.</p>
                    <a href="#"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                        Read in 2 minutes
                    </a>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-2.png"
                            class="mb-5 rounded-lg" alt="Image 2">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Enterprise design tips</a>
                    </h2>
                    <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone
                        many changes! After months of preparation.</p>
                    <a href="#"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                        Read in 12 minutes
                    </a>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-3.png"
                            class="mb-5 rounded-lg" alt="Image 3">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">We partnered with Google</a>
                    </h2>
                    <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone
                        many changes! After months of preparation.</p>
                    <a href="#"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                        Read in 8 minutes
                    </a>
                </article>
                <article class="max-w-xs">
                    <a href="#">
                        <img src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/article/blog-4.png"
                            class="mb-5 rounded-lg" alt="Image 4">
                    </a>
                    <h2 class="mb-2 text-xl font-bold leading-tight text-gray-900 dark:text-white">
                        <a href="#">Our first project with React</a>
                    </h2>
                    <p class="mb-4 font-light text-gray-500 dark:text-gray-400">Over the past year, Volosoft has undergone
                        many changes! After months of preparation.</p>
                    <a href="#"
                        class="inline-flex items-center font-medium underline underline-offset-4 text-primary-600 dark:text-primary-500 hover:no-underline">
                        Read in 4 minutes
                    </a>
                </article>
            </div>
        </div>
    </aside>

@endsection

@extends('pages.template.layout')

@section('customcss')
@endsection

@section('content')
    <section>
        <div class="relative max-w-screen-xl px-4 py-8 mx-auto">
            <div class="grid items-start grid-cols-3 gap-4 md:grid-cols-3 parent">

                <div class="col-span-2">
                    <strong
                        class="rounded-full border border-blue-600 bg-gray-100 px-3 py-0.5 text-xs font-medium tracking-wide text-blue-600">
                        24 Applicants
                    </strong>

                    <div class="flex justify-between mt-8">
                        <div class="max-w-[35ch]">
                            <h1 class="text-2xl font-bold">
                                Backend Developer
                            </h1>

                            <p class="mt-0.5 text-sm">Highest Rated Product</p>

                            <div class="mt-2 -ml-0.5 flex">
                                <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="w-5 h-5 text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>

                                <svg class="w-5 h-5 text-gray-200" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                                    fill="currentColor">
                                    <path
                                        d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                </svg>
                            </div>
                        </div>

                    </div>

                    <div class="group relative mt-4">

                        <div class="pb-6">

                            <h4>Job Description</h4>
                            <p>Job Locations: Bangalore, Delhi</p>

                            <p>Notice Period: 15- 30 Days</p>

                            <p>Salary: 20- 30LPA</p>

                            <h4>Educational Qualifications:</h4>

                            <p>IIM / IIT / or MBA from a Premium Institute.</p>
                            <p>A degree or equivalent is desirable.</p>

                            <p>As a Delivery Leader / Operation Head, you will lead your team, manage stakeholders, ensure
                                operational effectiveness
                                and strategic direction, resolve conflicts, and implement the overall account strategy.
                                Verify that the unit operates at
                                the standards outlined in each engagement’s service level agreements and by each client.</p>

                            <p>Driving best practices is your responsibility, and you should represent the NCG brand in
                                every situation. As the
                                recruitment delivery lead, you will proactively collaborate with the HR departments and
                                important client stakeholders to
                                comprehend their hiring forecast and develop efficient sourcing plans to satisfy it.</p>

                            <h4>Key Responsibilities:</h4>

                            <p>Managing Client Stakeholders and building sustainable relationships.</p>
                            <p>Understanding the need for recruiters and providing strategic updates on the situation would
                                require collaboration with
                                the account director, senior business stakeholders, and HR.</p>
                            <p>Assist the client in developing effective recruitment plans that meet the overall headcount
                                needs of the function.</p>
                            <p>You will help the client by offering market intelligence and insights to advance marketing
                                strategies. Keep an eye on
                                all workflow procedures and make sure they are improved as necessary.</p>


                            <p>Your responsibilities could involve, but not be limited to:</p>

                            <p>You will be responsible for daily, weekly, and monthly objectives, client-specific SLAs, and
                                process compliance.
                                Locating potential areas for solution expansion across practice streams, serving as a point
                                of contact for problems that
                                emerge, and determining the best resolution for all parties.</p>
                            <p>Must assist with workload distribution to the BU and the Recruitment Sourcing Manager,
                                including volume forecasts,
                                headcount planning, and leave management.</p>
                            <p>Delivering efficient performance optimization for every team member, ensuring all KPIs are
                                established and acceptable,
                                creating development plans, and providing mentorship as needed.</p>
                            <p>Recruiting and onboarding new employees as necessary, ensuring that the training and
                                onboarding procedures minimize
                                client disturbance and increase time to productivity.</p>

                            <h4>Qualifications:</h4>

                            <p>Must have a thorough understanding of end to end recruitment process and experience working
                                in a Team Leader/Operations</p>

                        </div>
                    </div>

                    <form class="mt-8">

                        <div class="grid grid-row-2 gap-1">
                            <div>

                                <div class="flex items-center justify-center w-full">
                                    <label for="dropzone-file"
                                        class="flex flex-col items-center justify-center w-full h-64 border-2 border-gray-300 border-dashed rounded-lg cursor-pointer bg-gray-50 dark:hover:bg-bray-800 dark:bg-gray-700 hover:bg-gray-100 dark:border-gray-600 dark:hover:border-gray-500 dark:hover:bg-gray-600">
                                        <div class="flex flex-col items-center justify-center pt-5 pb-6">
                                            <svg aria-hidden="true" class="w-10 h-10 mb-3 text-gray-400" fill="none"
                                                stroke="currentColor" viewBox="0 0 24 24"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12">
                                                </path>
                                            </svg>
                                            <p class="mb-2 text-sm text-gray-500 dark:text-gray-400"><span
                                                    class="font-semibold">Click to upload</span> or drag and drop</p>
                                            <p class="text-xs text-gray-500 dark:text-gray-400">PDF, DOC (MAX. 2MB)</p>
                                        </div>
                                        <input id="dropzone-file" type="file" class="hidden" />
                                    </label>
                                </div>
                            </div>

                            <button type="submit"
                                class="block px-5 py-3 ml-3 text-xs font-medium text-white bg-green-600 rounded hover:bg-green-500">
                                Apply Now
                            </button>
                        </div>
                    </form>
                </div>

                <div style="background-color: #F5F7FC;">
                    <div class="w-screen max-w-sm p-8 pt-4 bg-gray-100 border border-gray-600" aria-modal="true" role="dialog" tabindex="-1">

                        <div class="mt-6 space-y-6">
                            <ul class="space-y-4">
                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 3v2.25M17.25 3v2.25M3 18.75V7.5a2.25 2.25 0 012.25-2.25h13.5A2.25 2.25 0 0121 7.5v11.25m-18 0A2.25 2.25 0 005.25 21h13.5A2.25 2.25 0 0021 18.75m-18 0v-7.5A2.25 2.25 0 015.25 9h13.5A2.25 2.25 0 0121 11.25v7.5m-9-6h.008v.008H12v-.008zM12 15h.008v.008H12V15zm0 2.25h.008v.008H12v-.008zM9.75 15h.008v.008H9.75V15zm0 2.25h.008v.008H9.75v-.008zM7.5 15h.008v.008H7.5V15zm0 2.25h.008v.008H7.5v-.008zm6.75-4.5h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V15zm0 2.25h.008v.008h-.008v-.008zm2.25-4.5h.008v.008H16.5v-.008zm0 2.25h.008v.008H16.5V15z" />
                                    </svg>                                      

                                    <div class="ml-4">
                                        <p>Date Posted <br> January 3, 2023</p>
                                    </div>
                                </li>

                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                      </svg>                                      

                                    <div class="ml-4">
                                        <p>Location <br> Bangalore</p>
                                    </div>
                                </li>

                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                      </svg>
                                      

                                    <div class="ml-4">
                                        <p>Expiration date <br> March 2, 2023</p>
                                    </div>
                                </li>

                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-.952 4.125 4.125 0 00-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 018.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0111.964-3.07M12 6.375a3.375 3.375 0 11-6.75 0 3.375 3.375 0 016.75 0zm8.25 2.25a2.625 2.625 0 11-5.25 0 2.625 2.625 0 015.25 0z" />
                                      </svg>
                                      
                                    <div class="ml-4"> 
                                        <p>Experience <br> 2 Year</p>
                                    </div>
                                </li>

                                <li class="flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                                    </svg>
                                      
                                    <div class="ml-4">
                                        <p>Qualification <br> Bachelor Degree</p>
                                    </div>
                                </li>
                            </ul>

                            <div class="space-y-4 text-center">
                                <input type="file" name="" class="block px-5 py-3 text-sm text-gray-600 transition border border-gray-600 rounded hover:ring-1 hover:ring-gray-400" id="" value="Resume">

                                <a href="#"
                                    class="block px-5 py-3 text-sm text-gray-100 transition bg-gray-700 rounded hover:bg-gray-600">
                                    Apply Now
                                </a>

                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </section>
@endsection

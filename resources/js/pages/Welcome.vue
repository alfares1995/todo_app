<script setup lang="ts">
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome">
        <link rel="preconnect" href="https://rsms.me/" />
        <link rel="stylesheet" href="https://rsms.me/inter/inter.css" />
    </Head>
    <body>
    <!-- <div class="flex min-h-screen flex-col items-center bg-[#FDFDFC] p-6 text-[#1b1b18] dark:bg-[#0a0a0a] lg:justify-center lg:p-8"> -->
        <header class="not-has-[nav]:hidden mb-6 w-full max-w-[335px] text-sm lg:max-w-4xl">
                   <!-- Navigation -->
        <nav class="flex items-center justify-end gap-4">
                
                      
                <Link
                    :href="route('login')"
                    class="inline-block rounded-sm border border-transparent px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#19140035] dark:text-[#EDEDEC] dark:hover:border-[#3E3E3A]"
                >
                    Log in
                </Link>
                <Link
                    :href="route('register')"
                    class="inline-block rounded-sm border border-[#19140035] px-5 py-1.5 text-sm leading-normal text-[#1b1b18] hover:border-[#1915014a] dark:border-[#3E3E3A] dark:text-[#EDEDEC] dark:hover:border-[#62605b]"
                >
                    Register
                </Link>
           
            
        </nav>
        </header>
          <!-- Hero Section -->
    <section class="py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center">
                <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Organize Your Life with <span class="text-primary">Todos</span></h1>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto mb-10">The simplest, most powerful todo list app to help you stay productive and achieve your goals every day.</p>
                <div class="flex justify-center space-x-4">
                    <Link :href="route('login')" class="px-6 py-3 bg-primary text-white rounded-lg hover:bg-secondary transition shadow-md">Get Started - Login</Link>
                    <Link :href="route('register')" class="px-6 py-3 border border-primary text-primary rounded-lg hover:bg-gray-50 transition">Register</Link>
                </div>
            </div>
            <div class="mt-16 max-w-4xl mx-auto">
                <img src="build/assets/todo-bg.jpg" alt="Todos App Interface" class="rounded-xl shadow-xl border border-gray-200">
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">Powerful Features</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Everything you need to manage your tasks effectively and boost your productivity</p>
            </div>
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary bg-opacity-10 text-primary rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-tasks text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Simple Task Management</h3>
                    <p class="text-gray-600">Add, edit, and organize your tasks with our intuitive interface. Never forget an important task again.</p>
                </div>
                
                <!-- Feature 2 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary bg-opacity-10 text-primary rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-bell text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Smart Reminders</h3>
                    <p class="text-gray-600">Set due dates and get reminders so you stay on top of your schedule and deadlines.</p>
                </div>
                
                <!-- Feature 3 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary bg-opacity-10 text-primary rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-sync-alt text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Cross-Platform Sync</h3>
                    <p class="text-gray-600">Access your tasks from any device - desktop, tablet, or mobile. Your lists are always up to date.</p>
                </div>
                
                <!-- Feature 4 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary bg-opacity-10 text-primary rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-tags text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Tags & Categories</h3>
                    <p class="text-gray-600">Organize your tasks with custom tags and categories to keep everything neatly sorted.</p>
                </div>
                
                <!-- Feature 5 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary bg-opacity-10 text-primary rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-chart-bar text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Productivity Reports</h3>
                    <p class="text-gray-600">Track your progress with visual reports and analytics to see how productive you've been.</p>
                </div>
                
                <!-- Feature 6 -->
                <div class="bg-gray-50 p-8 rounded-xl hover:shadow-md transition">
                    <div class="w-12 h-12 bg-primary bg-opacity-10 text-primary rounded-full flex items-center justify-center mb-4">
                        <i class="fas fa-lock text-xl"></i>
                    </div>
                    <h3 class="text-xl font-semibold text-gray-900 mb-3">Secure & Private</h3>
                    <p class="text-gray-600">Your data is encrypted and protected. We respect your privacy and never sell your information.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonials -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center mb-16">
                <h2 class="text-3xl font-bold text-gray-900 mb-4">What Our Users Say</h2>
                <p class="text-xl text-gray-600 max-w-2xl mx-auto">Join thousands of productive people who use Todos every day</p>
            </div>
            <div class="grid md:grid-cols-3 gap-8">
                <!-- Testimonial 1 -->
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gray-200 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-semibold">Sarah Johnson</h4>
                            <p class="text-gray-500 text-sm">Product Manager</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"Todos has completely transformed how I organize my work. I'm 30% more productive since I started using it."</p>
                </div>
                
                <!-- Testimonial 2 -->
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gray-200 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-semibold">Michael Chen</h4>
                            <p class="text-gray-500 text-sm">Software Developer</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"The cross-platform sync is flawless. I can access my tasks anywhere, which is perfect for my on-the-go lifestyle."</p>
                </div>
                
                <!-- Testimonial 3 -->
                <div class="bg-white p-8 rounded-xl shadow-sm">
                    <div class="flex items-center mb-4">
                        <div class="w-12 h-12 bg-gray-200 rounded-full mr-4"></div>
                        <div>
                            <h4 class="font-semibold">Emily Rodriguez</h4>
                            <p class="text-gray-500 text-sm">Student</p>
                        </div>
                    </div>
                    <p class="text-gray-600">"As a student with lots of assignments, Todos helps me stay on top of everything. The reminders are a lifesaver!"</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="py-20 bg-gradient-to-r from-primary to-secondary">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold text-white mb-6">Ready to Transform Your Productivity?</h2>
            <p class="text-xl text-white opacity-90 max-w-2xl mx-auto mb-10">Join thousands of users who are getting more done every day with Todos.</p>
            <Link :href="route('login')" class="px-8 py-4 bg-white text-primary rounded-lg font-semibold hover:bg-gray-100 transition shadow-lg inline-block">Start Free Now</Link>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-white py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-4 gap-8">
                <div>
                    <a href="#" class="text-2xl font-bold text-white">To<span class="text-accent">dos</span></a>
                    <p class="mt-4 text-gray-400">The simplest, most powerful todo list app to help you stay productive.</p>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-4">Product</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Features</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Pricing</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Download</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-4">Company</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">About Us</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Careers</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Contact</a></li>
                    </ul>
                </div>
                <div>
                    <h4 class="font-semibold text-lg mb-4">Legal</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Privacy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Terms</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white transition">Cookie Policy</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                <p class="text-gray-400">© 2025 Todos. All rights reserved.</p>
                <div class="flex space-x-6 mt-4 md:mt-0">
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-gray-400 hover:text-white transition"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </footer>
</body>


    
    </template>

    ///////////////////////////////////////////////////////////////////////////////////////////
   
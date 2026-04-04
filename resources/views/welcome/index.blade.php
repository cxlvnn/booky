<x-layout>
    <div class="max-w-7xl mx-auto px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
            <div class="space-y-8">
                <div class="inline-flex items-center gap-2 bg-blue-500/10 text-blue-400 text-sm font-medium px-5 py-2 rounded-full">
                    Simple Bookmark Manager
                </div>

                <h1 class="text-5xl lg:text-6xl font-bold text-white leading-tight">
                    Save your links.<br>
                    Stay organized.
                </h1>

                <p class="text-lg text-slate-400 max-w-md">
                    A clean and minimal bookmark manager to save, organize, and quickly find your favorite websites.
                </p>

                <div class="flex flex-wrap gap-4">
                <a href="/register">
                    <button class="bg-blue-500 hover:bg-blue-600 hover:cursor-pointer transition px-8 py-4 rounded-2xl text-white font-semibold text-lg">
                        Get Started
                    </button>
                </a>
                </div>
            </div>

            <div class="flex justify-center lg:justify-end">
                <div class="w-full max-w-md bg-[#1e2937] border border-slate-700 rounded-3xl overflow-hidden shadow-2xl">
                    <div class="bg-[#0f172a] px-5 py-3 flex items-center gap-2">
                        <div class="flex gap-1.5">
                            <div class="w-3 h-3 bg-red-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-yellow-500 rounded-full"></div>
                            <div class="w-3 h-3 bg-green-500 rounded-full"></div>
                        </div>
                    </div>

                    <div class="p-10 text-center bg-[#172033]">
                        <div class="text-7xl mb-6">🔖</div>
                        <h3 class="text-2xl font-semibold text-white mb-2">My Bookmarks</h3>
                        <p class="text-slate-400">Everything in one clean place</p>

                        <div class="mt-12 grid grid-cols-2 gap-6 text-left">
                            <div class="bg-[#1e2937] p-4 rounded-2xl">
                                <p class="text-blue-400 text-sm font-medium">Reading</p>
                                <p class="text-slate-300 text-sm mt-1">12 links</p>
                            </div>
                            <div class="bg-[#1e2937] p-4 rounded-2xl">
                                <p class="text-emerald-400 text-sm font-medium">Work</p>
                                <p class="text-slate-300 text-sm mt-1">8 links</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</x-layout>

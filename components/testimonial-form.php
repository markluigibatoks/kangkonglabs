<div class="sm:shadow-lg">
    <div class="sm:px-10 sm:pt-10 border-b ">
        <h2 class="font-unbounded text-2xl md:text-4xl lg:text-6xl mb-5">Testimonial Form</h2>
    </div>
    <div class="sm:px-10 sm:pb-10 mt-5">
        
        <form method="POST" id="testimonial-form">
            <div class="flex flex-col sm:flex-row gap-1 sm:gap-5 mb-8">
                <label class="w-full sm:max-w-1/3">Website Title</label>
                <input type="text" name="website_title" autofocus required class="w-full border hover:shadow px-4 py-2 rounded"/>
            </div>
            <div class="flex flex-col sm:flex-row gap-1 sm:gap-5 mb-8">
                <label class="w-full sm:max-w-1/3">Website URL</label>
                <input type="text" name="website_url" required class="w-full border hover:shadow px-4 py-2 rounded"/>
            </div>
            <div class="flex flex-col sm:flex-row gap-1 sm:gap-5 mb-8">
                <label class="w-full sm:max-w-1/3">Name</label>
                <input type="text" name="name" required class="w-full border hover:shadow px-4 py-2 rounded"/>
            </div>
            <div class="flex flex-col sm:flex-row gap-1 sm:gap-5 mb-8">
                <label class="w-full sm:max-w-1/3">Your Testimonial</label>
                <textarea required name="your_testimonial" class="resize-y min-h-[100px] w-full border hover:shadow px-4 py-2 rounded"></textarea>
            </div>
            <div class="flex flex-col sm:flex-row gap-1 sm:gap-5 mb-12">
                <label class="w-full sm:max-w-1/3">Rate Our Services</label>
                <input type="hidden" id="testimonial-rating-field" name="rating" default="5" value="5" min="1" max="5" hidden class="hidden w-full border hover:shadow px-4 py-2 rounded"/>
            
                <div id="star-rating" class="flex gap-1 text-xl">
                    <i data-value="1" class="cursor-pointer fa-solid fa-star text-tertiary"></i>
                    <i data-value="2" class="cursor-pointer fa-solid fa-star text-tertiary"></i>  
                    <i data-value="3" class="cursor-pointer fa-solid fa-star text-tertiary"></i>  
                    <i data-value="4" class="cursor-pointer fa-solid fa-star text-tertiary"></i>  
                    <i data-value="5" class="cursor-pointer fa-solid fa-star text-tertiary"></i>  
                </div>
            </div>
            
            <div class="flex gap-2">
                <button type="reset" class="hover:bg-secondary hover:text-white hover:opacity-70 px-6 py-3 text-secondary border border-solid border-secondary rounded-[22px] cursor-pointer max-w-max">Clear Fields</button>

                <button type="submit" class="hover:bg-secondary hover:text-white hover:opacity-70 px-6 py-3 text-white bg-secondary border border-solid border-secondary rounded-[22px] cursor-pointer max-w-max">Submit</button>
            </div>
        </form>
    </div>
</div>
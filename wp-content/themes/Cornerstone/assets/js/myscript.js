document.addEventListener("DOMContentLoaded", function () {
    // Select all video sections
    const videoSections = document.querySelectorAll(".video-section");

    videoSections.forEach((section) => {
        const playButton = section.querySelector(".play-button");
        const videoThumbnail = section.querySelector(".video-thumbnail");
        const videoContainer = section.querySelector(".video-container");
        const iframe = section.querySelector("iframe");

        if (playButton && videoThumbnail && videoContainer && iframe) {
            playButton.addEventListener("click", function () {
                // Retrieve the current video URL
                let videoSrc = iframe.getAttribute("src");

                // Check if autoplay parameter is already added
                if (!videoSrc.includes("autoplay=1")) {
                    videoSrc = `${videoSrc}?autoplay=1`;
                    iframe.setAttribute("src", videoSrc);

                    console.log(videoSrc);
                }

                // Hide the thumbnail and show the video container
                videoThumbnail.style.display = "none";
                videoContainer.style.display = "block";

                // Log for debugging
                console.log("Video autoplay triggered. Updated URL: ", videoSrc);
            });
        } else {
            console.log("Elements not found or incorrectly configured for this section.");
        }
    });
});



document.addEventListener("DOMContentLoaded", () => {
    const slides = document.querySelectorAll("#custom-slider .slide");
    const thumbnails = document.querySelectorAll("#custom-slider .thumbnail");
    const prevBtn = document.getElementById("prev-btn");
    const nextBtn = document.getElementById("next-btn");

    let currentIndex = 0;

    function updateSlider(index) {
        slides.forEach((slide, i) => {
            if (i === index) {
                slide.classList.add("active");
                slide.style.display = "block"; // Show the active slide
            } else {
                slide.classList.remove("active");
                slide.style.display = "none"; // Hide the non-active slides
            }
        });
    
        thumbnails.forEach((thumbnail, i) => {
            if (i === index) {
                thumbnail.classList.add("active");
            } else {
                thumbnail.classList.remove("active");
            }
        });
    }

    // Add event listeners for navigation buttons
    prevBtn.addEventListener("click", () => {
        currentIndex = (currentIndex - 1 + slides.length) % slides.length;
        console.log("Slide Index(prev): " + currentIndex);
        updateSlider(currentIndex);
    });

    nextBtn.addEventListener("click", () => {
        currentIndex = (currentIndex + 1) % slides.length;
        console.log("Slide Index(next): " + currentIndex);
        updateSlider(currentIndex);
    });

    // Add event listeners for thumbnail clicks
    thumbnails.forEach((thumbnail, index) => {
        thumbnail.addEventListener("click", () => {
            currentIndex = index;
            console.log(currentIndex);
            updateSlider(currentIndex);
        });
    });

    // Initialize slider
    updateSlider(currentIndex);
});

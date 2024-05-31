// Array of image paths
const images = [
    'images/pic1.jpeg',
    'images/pic2.jpeg',
    'images/pic3.jpeg',
    'images/pic4.jpeg',
    'images/pic5.jpeg'
];

// Initialize the current image index
let currentIndex = 0;

// Get the main image element and navigation buttons
const mainImage = document.getElementById('mainImage');
const prevButton = document.getElementById('prev');
const nextButton = document.getElementById('next');

// Function to update the image source based on the current index
function updateImage() {
    mainImage.src = images[currentIndex];
}

// Event listener for the 'Previous' button
prevButton.addEventListener('click', function(){
    if (currentIndex === 0) {
        currentIndex = images.length - 1;
    } else {
        currentIndex -= 1;
    }
    updateImage();
});

// Event listener for the 'Next' button
nextButton.addEventListener('click', function() {
    if (currentIndex === images.length - 1) {
        currentIndex = 0;
    } else {
        currentIndex += 1;
    }
    updateImage();
});

// Initial call to set the first image
updateImage();

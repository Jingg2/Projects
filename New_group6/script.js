
let slideIndex = 0;

function showSlides() {
    let slides = document.getElementsByClassName("mySlides");
    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) { slideIndex = 1 }
    slides[slideIndex - 1].style.display = "block";
    setTimeout(showSlides, 3000); // Change image every 2 seconds
}

showSlides();


//section story

// Select the elements
const leftArrow = document.querySelector('.left-arrow');
const rightArrow = document.querySelector('.right-arrow');
const storySection = document.querySelector('.story-section');

// Scroll Amount (adjust if needed)
const scrollAmount = 300;

// Event listeners for scrolling
leftArrow.addEventListener('click', () => {
    storySection.scrollBy({
        left: -scrollAmount,
        behavior: 'smooth'
    });
});

rightArrow.addEventListener('click', () => {
    storySection.scrollBy({
        left: scrollAmount,
        behavior: 'smooth'
    });
});


function showBook() {
    var element = document.getElementById("book");
    element.style.display = "block";
}


document.getElementById('save-btn').addEventListener('click', () => {
    const title = document.getElementById('note-title').value || 'Untitled Note';
    const content = document.getElementById('note-content').value;

    if (!content.trim()) {
        alert('Note content is empty!');
        return;
    }

    localStorage.setItem('noteTitle', title);
    localStorage.setItem('noteContent', content);
    alert('Note saved successfully!');
});

document.getElementById('preview-btn').addEventListener('click', () => {
    const title = localStorage.getItem('noteTitle') || 'Untitled Note';
    const content = localStorage.getItem('noteContent') || 'No content available.';

    alert(`Preview:\n\nTitle: ${title}\n\n${content}`);
});


//header

document.getElementById("changeStyleLink").addEventListener("click", function (event) {
    event.preventDefault(); // Prevent default link behavior
    const infoDiv = document.getElementById("info");

    // Toggle the display property
    if (infoDiv.style.display === "none" || infoDiv.style.display === "") {
        infoDiv.style.display = "block"; // Show the div
    } else {
        infoDiv.style.display = "none"; // Hide the div
    }
});




    const menuToggle = document.getElementById('menuToggle');
    const navbar = document.querySelector('.navbar');

    menuToggle.addEventListener('click', function () {
        navbar.classList.toggle('hidden');
    });


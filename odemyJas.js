const categoryLinks = document.querySelectorAll('.browse-course-category li');
const categoryCourses = document.querySelectorAll('.browse-course-details');
const functionCourse = document.querySelectorAll('.upper-function li');
const homeLink = functionCourse[0];
const browseCourseLink = functionCourse[1];
categoryLinks.forEach((link, index) => {
    link.addEventListener('click', function(event) {
        event.preventDefault();
        categoryLinks.forEach(link => {
            link.classList.remove('courseActive');
        });
        
        this.classList.add('courseActive');
        categoryCourses.forEach(course => {
            course.style.display = 'none';
        });
        categoryCourses[index].style.display = 'block';
    });
});
functionCourse.forEach((link, index) => {
link.addEventListener('click', function(event) {
    if (this.textContent.trim() === "FAQS") {
        return;
    }
    event.preventDefault();
    functionCourse.forEach(link => {
        link.classList.remove('upper-function-active');
    });
    this.classList.add('upper-function-active');
    if (this.textContent.trim() === "Browse Course") {
        document.getElementById('course').scrollIntoView({ behavior: 'smooth' });
    }
    if (this.textContent.trim() === "Home") {
        document.getElementById('home').scrollIntoView({ behavior: 'smooth' });
    }
});
});

function handleScroll() {
const browseCourseSection = document.getElementById('course');
const rect = browseCourseSection.getBoundingClientRect();
if (rect.top > 0) {
    functionCourse.forEach(link => link.classList.remove('upper-function-active'));
    homeLink.classList.add('upper-function-active');
} else {
    homeLink.classList.remove('upper-function-active');
    browseCourseLink.classList.add('upper-function-active');
}
}
function openView(){
const shoppingCart = document.querySelector('.shopping-cart');
const blurOverlay = document.querySelector('.blur-overlay');
shoppingCart.style.display = 'flex';
blurOverlay.style.display = 'block';
}
function closeView(){
const shoppingCart = document.querySelector('.shopping-cart');
const blurOverlay = document.querySelector('.blur-overlay');
shoppingCart.style.display = 'none';
blurOverlay.style.display = 'none';
functionCourse.forEach(link => {
    link.classList.remove('upper-function-active');
});
}
window.addEventListener('scroll', handleScroll);
function addinglove(event) {
    const loveElement = event.target.querySelector('.heart');
    if (loveElement) {
        loveElement.classList.toggle('love');
    }
}
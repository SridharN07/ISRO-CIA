const imageUrls = [
    'Styles/Images/Gallery/img1.webp',
    'Styles/Images/Gallery/img2.jpg',
    'Styles/Images/Gallery/img3.jpg',
    'Styles/Images/Gallery/img4.png',
    'Styles/Images/Gallery/img5.jpg',
    'Styles/Images/Gallery/img6.webp',
    'Styles/Images/Gallery/img7.jpg',
    'Styles/Images/Gallery/img8.webp',
    'Styles/Images/Gallery/img9.jpg',
    'Styles/Images/Gallery/img10.webp',
    'Styles/Images/Gallery/img11.webp',
    'Styles/Images/Gallery/img12.webp',
    'Styles/Images/Gallery/img13.jpg',
    'Styles/Images/Gallery/img14.jpg',
    'Styles/Images/Gallery/img15.jpg',
    'Styles/Images/Gallery/img16.jpg',
    'Styles/Images/Gallery/img17.jpg',
    'Styles/Images/Gallery/img18.webp',
    'Styles/Images/Gallery/img19.jpg',
    'Styles/Images/Gallery/img20.jpg',
    'Styles/Images/Gallery/img21.jpg',
    'Styles/Images/Gallery/img22.jpg',
    'Styles/Images/Gallery/img23.jpg',
    'Styles/Images/Gallery/img24.jpg',
    'Styles/Images/Gallery/img25.jpg',
    'Styles/Images/Gallery/img26.jpg',
    'Styles/Images/Gallery/img27.jpg',
    'Styles/Images/Gallery/img28.jpg',
    'Styles/Images/Gallery/img29.jpg',
    'Styles/Images/Gallery/img30.jpg',
    'Styles/Images/Gallery/img31.webp',
    'Styles/Images/Gallery/img33.jpg',
    'Styles/Images/Gallery/img34.jpg',
    'Styles/Images/Gallery/img35.jpg',
    'Styles/Images/Gallery/img36.webp',
    'Styles/Images/Gallery/img37.jpg',
    'Styles/Images/Gallery/img38.jpg',
    'Styles/Images/Gallery/img39.webp',
    'Styles/Images/Gallery/img40.jpg',
    'Styles/Images/Gallery/img41.webp',
    'Styles/Images/Gallery/img42.webp',
    'Styles/Images/Gallery/img43.jpg',
    'Styles/Images/Gallery/img44.webp',
    'Styles/Images/Gallery/img45.jpg',
    'Styles/Images/Gallery/img46.webp',
    'Styles/Images/Gallery/img47.webp',
    'Styles/Images/Gallery/img48.webp',
    'Styles/Images/Gallery/img49.jpg',
];

function createImageGallery(urls) {
    const gallery = document.getElementById('gallery');
    for (let i = 0; i < urls.length; i++) {
        const img = document.createElement('img');
        img.src = urls[i];
        img.alt = `Image ${i + 1}`;
        img.loading = 'lazy';
        gallery.appendChild(img);
    }
}

createImageGallery(imageUrls);

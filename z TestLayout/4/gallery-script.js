// Photography Gallery JavaScript

// Gallery data
const galleryData = [
    {
        id: 1,
        category: 'portraits',
        src: 'https://images.pexels.com/photos/1239291/pexels-photo-1239291.jpeg?auto=compress&cs=tinysrgb&w=800&h=1200&fit=crop',
        title: 'Professional Portrait',
        description: 'Studio portrait session with natural lighting',
        tags: ['portrait', 'studio', 'professional']
    },
    {
        id: 2,
        category: 'weddings',
        src: 'https://images.pexels.com/photos/1024993/pexels-photo-1024993.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Wedding Ceremony',
        description: 'Beautiful wedding ceremony captured in golden hour',
        tags: ['wedding', 'ceremony', 'golden hour']
    },
    {
        id: 3,
        category: 'commercial',
        src: 'https://images.pexels.com/photos/1055691/pexels-photo-1055691.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Product Photography',
        description: 'High-end product photography for luxury brand',
        tags: ['product', 'commercial', 'luxury']
    },
    {
        id: 4,
        category: 'nature',
        src: 'https://images.pexels.com/photos/1591373/pexels-photo-1591373.jpeg?auto=compress&cs=tinysrgb&w=800&h=1200&fit=crop',
        title: 'Mountain Landscape',
        description: 'Breathtaking mountain landscape at sunrise',
        tags: ['landscape', 'mountain', 'sunrise']
    },
    {
        id: 5,
        category: 'portraits',
        src: 'https://images.pexels.com/photos/1212984/pexels-photo-1212984.jpeg?auto=compress&cs=tinysrgb&w=800&h=1200&fit=crop',
        title: 'Fashion Portrait',
        description: 'Editorial fashion portrait with dramatic lighting',
        tags: ['fashion', 'editorial', 'dramatic']
    },
    {
        id: 6,
        category: 'events',
        src: 'https://images.pexels.com/photos/1190297/pexels-photo-1190297.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Corporate Event',
        description: 'Professional corporate event documentation',
        tags: ['corporate', 'event', 'business']
    },
    {
        id: 7,
        category: 'weddings',
        src: 'https://images.pexels.com/photos/1444442/pexels-photo-1444442.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Wedding Reception',
        description: 'Joyful moments from wedding reception',
        tags: ['wedding', 'reception', 'celebration']
    },
    {
        id: 8,
        category: 'nature',
        src: 'https://images.pexels.com/photos/1440727/pexels-photo-1440727.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Wildlife Photography',
        description: 'Stunning wildlife captured in natural habitat',
        tags: ['wildlife', 'nature', 'animals']
    },
    {
        id: 9,
        category: 'portraits',
        src: 'https://images.pexels.com/photos/1130626/pexels-photo-1130626.jpeg?auto=compress&cs=tinysrgb&w=800&h=1200&fit=crop',
        title: 'Creative Portrait',
        description: 'Artistic portrait with creative composition',
        tags: ['creative', 'artistic', 'composition']
    },
    {
        id: 10,
        category: 'commercial',
        src: 'https://images.pexels.com/photos/1006293/pexels-photo-1006293.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Fashion Campaign',
        description: 'High-fashion commercial photography',
        tags: ['fashion', 'campaign', 'commercial']
    },
    {
        id: 11,
        category: 'events',
        src: 'https://images.pexels.com/photos/1157557/pexels-photo-1157557.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Music Concert',
        description: 'Live music performance photography',
        tags: ['concert', 'music', 'performance']
    },
    {
        id: 12,
        category: 'weddings',
        src: 'https://images.pexels.com/photos/1043473/pexels-photo-1043473.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Bridal Portrait',
        description: 'Elegant bridal portrait session',
        tags: ['bridal', 'wedding', 'elegant']
    },
    {
        id: 13,
        category: 'portraits',
        src: 'https://images.pexels.com/photos/1181686/pexels-photo-1181686.jpeg?auto=compress&cs=tinysrgb&w=800&h=1200&fit=crop',
        title: 'Business Portrait',
        description: 'Professional business headshot',
        tags: ['business', 'headshot', 'professional']
    },
    {
        id: 14,
        category: 'nature',
        src: 'https://images.pexels.com/photos/1366919/pexels-photo-1366919.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Ocean Sunset',
        description: 'Spectacular ocean sunset photography',
        tags: ['ocean', 'sunset', 'seascape']
    },
    {
        id: 15,
        category: 'commercial',
        src: 'https://images.pexels.com/photos/1267320/pexels-photo-1267320.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Architecture Photography',
        description: 'Modern architecture commercial shoot',
        tags: ['architecture', 'modern', 'commercial']
    },
    {
        id: 16,
        category: 'events',
        src: 'https://images.pexels.com/photos/1105666/pexels-photo-1105666.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Art Gallery Opening',
        description: 'Cultural event photography',
        tags: ['art', 'gallery', 'cultural']
    },
    {
        id: 17,
        category: 'portraits',
        src: 'https://images.pexels.com/photos/1222271/pexels-photo-1222271.jpeg?auto=compress&cs=tinysrgb&w=800&h=1200&fit=crop',
        title: 'Lifestyle Portrait',
        description: 'Natural lifestyle portrait session',
        tags: ['lifestyle', 'natural', 'outdoor']
    },
    {
        id: 18,
        category: 'weddings',
        src: 'https://images.pexels.com/photos/1024960/pexels-photo-1024960.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Wedding Details',
        description: 'Beautiful wedding detail photography',
        tags: ['wedding', 'details', 'rings']
    },
    {
        id: 19,
        category: 'portraits',
        src: 'https://images.pexels.com/photos/1300402/pexels-photo-1300402.jpeg?auto=compress&cs=tinysrgb&w=800&h=1200&fit=crop',
        title: 'Senior Portrait',
        description: 'High school senior portrait session',
        tags: ['senior', 'graduation', 'youth']
    },
    {
        id: 20,
        category: 'events',
        src: 'https://images.pexels.com/photos/1181406/pexels-photo-1181406.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Conference Photography',
        description: 'Professional conference documentation',
        tags: ['conference', 'business', 'networking']
    },
    {
        id: 21,
        category: 'weddings',
        src: 'https://images.pexels.com/photos/1024967/pexels-photo-1024967.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Wedding Dance',
        description: 'First dance wedding photography',
        tags: ['wedding', 'dance', 'romantic']
    },
    {
        id: 22,
        category: 'portraits',
        src: 'https://images.pexels.com/photos/1484794/pexels-photo-1484794.jpeg?auto=compress&cs=tinysrgb&w=800&h=1200&fit=crop',
        title: 'Family Portrait',
        description: 'Beautiful family portrait session',
        tags: ['family', 'group', 'love']
    },
    {
        id: 23,
        category: 'weddings',
        src: 'https://images.pexels.com/photos/1024966/pexels-photo-1024966.jpeg?auto=compress&cs=tinysrgb&w=800&h=600&fit=crop',
        title: 'Wedding Bouquet',
        description: 'Artistic wedding bouquet photography',
        tags: ['wedding', 'bouquet', 'flowers']
    },
    {
        id: 24,
        category: 'portraits',
        src: 'https://images.pexels.com/photos/1181424/pexels-photo-1181424.jpeg?auto=compress&cs=tinysrgb&w=800&h=1200&fit=crop',
        title: 'Maternity Portrait',
        description: 'Beautiful maternity portrait session',
        tags: ['maternity', 'pregnancy', 'expecting']
    }
];

// Global variables
let currentCategory = 'all';
let currentSearchTerm = '';
let filteredImages = [...galleryData];
let currentLightboxIndex = 0;
let likedImages = new Set();

// DOM elements
const galleryGrid = document.getElementById('galleryGrid');
const searchInput = document.getElementById('searchInput');
const categoryButtons = document.querySelectorAll('.category-btn');
const resultsCount = document.getElementById('resultsCount');
const noResults = document.getElementById('noResults');
const lightboxModal = new bootstrap.Modal(document.getElementById('lightboxModal'));
const lightboxImage = document.getElementById('lightboxImage');
const lightboxTitle = document.getElementById('lightboxTitle');
const lightboxDescription = document.getElementById('lightboxDescription');
const lightboxTags = document.getElementById('lightboxTags');
const imageCounter = document.getElementById('imageCounter');
const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

// Initialize gallery
document.addEventListener('DOMContentLoaded', function() {
    renderGallery();
    setupEventListeners();
});

// Setup event listeners
function setupEventListeners() {
    // Search functionality
    searchInput.addEventListener('input', handleSearch);
    
    // Category filter buttons
    categoryButtons.forEach(btn => {
        btn.addEventListener('click', handleCategoryFilter);
    });
    
    // Lightbox navigation
    prevBtn.addEventListener('click', showPreviousImage);
    nextBtn.addEventListener('click', showNextImage);
    
    // Keyboard navigation
    document.addEventListener('keydown', handleKeyboardNavigation);
    
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

// Handle search functionality
function handleSearch(e) {
    currentSearchTerm = e.target.value.toLowerCase();
    filterAndRenderGallery();
}

// Handle category filtering
function handleCategoryFilter(e) {
    // Update active button
    categoryButtons.forEach(btn => btn.classList.remove('active'));
    e.target.classList.add('active');
    
    currentCategory = e.target.dataset.category;
    filterAndRenderGallery();
}

// Filter and render gallery
function filterAndRenderGallery() {
    filteredImages = galleryData.filter(image => {
        const matchesCategory = currentCategory === 'all' || image.category === currentCategory;
        const matchesSearch = currentSearchTerm === '' || 
            image.title.toLowerCase().includes(currentSearchTerm) ||
            image.description.toLowerCase().includes(currentSearchTerm) ||
            image.tags.some(tag => tag.toLowerCase().includes(currentSearchTerm));
        
        return matchesCategory && matchesSearch;
    });
    
    renderGallery();
    updateResultsCount();
}

// Render gallery grid
function renderGallery() {
    if (filteredImages.length === 0) {
        galleryGrid.classList.add('d-none');
        noResults.classList.remove('d-none');
        return;
    }
    
    galleryGrid.classList.remove('d-none');
    noResults.classList.add('d-none');
    
    galleryGrid.innerHTML = filteredImages.map((image, index) => `
        <div class="col-lg-3 col-md-4 col-sm-6">
            <div class="gallery-item fade-in" onclick="openLightbox(${index})" style="animation-delay: ${index * 0.1}s">
                <img src="${image.src}" alt="${image.title}" loading="lazy">
                <button class="like-btn-gallery ${likedImages.has(image.id) ? 'liked' : ''}" 
                        onclick="event.stopPropagation(); toggleLike(${image.id})">
                    <i class="${likedImages.has(image.id) ? 'fas' : 'far'} fa-heart"></i>
                </button>
                <div class="gallery-overlay">
                    <div class="gallery-overlay-content">
                        <h5>${image.title}</h5>
                        <p>${image.description}</p>
                        <div>
                            ${image.tags.slice(0, 2).map(tag => `<span class="tag">#${tag}</span>`).join('')}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    `).join('');
}

// Update results count
function updateResultsCount() {
    const count = filteredImages.length;
    let text = `Showing <span class="fw-semibold">${count}</span> result${count !== 1 ? 's' : ''}`;
    
    if (currentSearchTerm) {
        text += ` for "<span class="fw-semibold">${currentSearchTerm}</span>"`;
    }
    
    resultsCount.innerHTML = text;
}

// Toggle like functionality
function toggleLike(imageId) {
    if (likedImages.has(imageId)) {
        likedImages.delete(imageId);
    } else {
        likedImages.add(imageId);
    }
    
    // Update the like button in gallery
    const likeBtn = document.querySelector(`[onclick*="toggleLike(${imageId})"]`);
    if (likeBtn) {
        const icon = likeBtn.querySelector('i');
        if (likedImages.has(imageId)) {
            likeBtn.classList.add('liked');
            icon.className = 'fas fa-heart';
        } else {
            likeBtn.classList.remove('liked');
            icon.className = 'far fa-heart';
        }
    }
    
    // Update the like button in lightbox if open
    const lightboxLikeBtn = document.querySelector('.like-btn[data-image-id]');
    if (lightboxLikeBtn && parseInt(lightboxLikeBtn.dataset.imageId) === imageId) {
        const icon = lightboxLikeBtn.querySelector('i');
        if (likedImages.has(imageId)) {
            icon.className = 'fas fa-heart text-danger';
        } else {
            icon.className = 'far fa-heart';
        }
    }
}

// Open lightbox
function openLightbox(index) {
    currentLightboxIndex = index;
    updateLightboxContent();
    lightboxModal.show();
}

// Update lightbox content
function updateLightboxContent() {
    const image = filteredImages[currentLightboxIndex];
    
    lightboxImage.src = image.src;
    lightboxImage.alt = image.title;
    lightboxTitle.textContent = image.title;
    lightboxDescription.textContent = image.description;
    
    // Update tags
    lightboxTags.innerHTML = image.tags.map(tag => 
        `<span class="lightbox-tag">#${tag}</span>`
    ).join('');
    
    // Update counter
    imageCounter.textContent = `${currentLightboxIndex + 1} / ${filteredImages.length}`;
    
    // Update like button
    const lightboxLikeBtn = document.querySelector('.like-btn[data-image-id]');
    lightboxLikeBtn.dataset.imageId = image.id;
    const icon = lightboxLikeBtn.querySelector('i');
    if (likedImages.has(image.id)) {
        icon.className = 'fas fa-heart text-danger';
    } else {
        icon.className = 'far fa-heart';
    }
    
    // Update navigation buttons
    prevBtn.style.display = filteredImages.length > 1 ? 'block' : 'none';
    nextBtn.style.display = filteredImages.length > 1 ? 'block' : 'none';
}

// Show previous image
function showPreviousImage() {
    currentLightboxIndex = (currentLightboxIndex - 1 + filteredImages.length) % filteredImages.length;
    updateLightboxContent();
}

// Show next image
function showNextImage() {
    currentLightboxIndex = (currentLightboxIndex + 1) % filteredImages.length;
    updateLightboxContent();
}

// Handle keyboard navigation
function handleKeyboardNavigation(e) {
    if (document.querySelector('.modal.show')) {
        switch(e.key) {
            case 'Escape':
                lightboxModal.hide();
                break;
            case 'ArrowLeft':
                showPreviousImage();
                break;
            case 'ArrowRight':
                showNextImage();
                break;
        }
    }
}

// Handle lightbox like button
document.addEventListener('click', function(e) {
    if (e.target.closest('.like-btn[data-image-id]')) {
        const imageId = parseInt(e.target.closest('.like-btn[data-image-id]').dataset.imageId);
        toggleLike(imageId);
    }
});

// Smooth scroll to top functionality
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}

// Add scroll to top button
document.addEventListener('scroll', function() {
    const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
    
    // You can add a scroll to top button here if needed
    if (scrollTop > 500) {
        // Show scroll to top button
    } else {
        // Hide scroll to top button
    }
});

// Lazy loading for images (additional optimization)
if ('IntersectionObserver' in window) {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                imageObserver.unobserve(img);
            }
        });
    });
    
    // This would be used if implementing lazy loading
    // document.querySelectorAll('img[data-src]').forEach(img => {
    //     imageObserver.observe(img);
    // });
}

// Performance optimization: Debounce search
function debounce(func, wait) {
    let timeout;
    return function executedFunction(...args) {
        const later = () => {
            clearTimeout(timeout);
            func(...args);
        };
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
    };
}

// Apply debounce to search
const debouncedSearch = debounce(handleSearch, 300);
searchInput.removeEventListener('input', handleSearch);
searchInput.addEventListener('input', debouncedSearch);
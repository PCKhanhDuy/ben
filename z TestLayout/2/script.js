// Gallery Data
const galleryData = [
    {
        id: 1,
        title: 'SCANDINAVIAN MINIMALISM',
        category: 'interior',
        image: 'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Clean lines and natural light define this contemporary living space with carefully curated furniture pieces that embody Nordic design principles.',
        year: '2024',
        client: 'NORDIC HOMES'
    },
    {
        id: 2,
        title: 'AI-ENHANCED KITCHEN',
        category: 'ai',
        image: 'https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Machine learning algorithms enhance lighting and composition for perfect architectural photography with computational precision.',
        year: '2024',
        client: 'TECH HOMES'
    },
    {
        id: 3,
        title: 'LUXURY BEDROOM SUITE',
        category: 'editing',
        image: 'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Professional retouching and color grading mastery showcasing elegant bedroom design with premium material textures.',
        year: '2024',
        client: 'ELITE INTERIORS'
    },
    {
        id: 4,
        title: 'MODERN DINING EXPERIENCE',
        category: 'video',
        image: 'https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Cinematic storytelling through architectural spaces with dynamic camera movements and atmospheric lighting.',
        year: '2024',
        client: 'DINING CO.'
    },
    {
        id: 5,
        title: 'EXECUTIVE OFFICE',
        category: 'interior',
        image: 'https://images.pexels.com/photos/667838/pexels-photo-667838.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Corporate elegance meets functional design in this sophisticated workspace with premium materials and lighting.',
        year: '2023',
        client: 'BUSINESS HUB'
    },
    {
        id: 6,
        title: 'NEURAL STYLE TRANSFER',
        category: 'ai',
        image: 'https://images.pexels.com/photos/1648776/pexels-photo-1648776.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Artistic interpretation through artificial intelligence creating unique visual narratives and enhanced compositions.',
        year: '2024',
        client: 'ART TECH'
    },
    {
        id: 7,
        title: 'HDR LIVING SPACE',
        category: 'editing',
        image: 'https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'High dynamic range processing for perfect exposure balance in challenging lighting conditions with natural results.',
        year: '2023',
        client: 'BRIGHT HOMES'
    },
    {
        id: 8,
        title: 'PROPERTY SHOWCASE FILM',
        category: 'video',
        image: 'https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Complete architectural documentation and storytelling through cinematic techniques and professional production.',
        year: '2024',
        client: 'REAL ESTATE PRO'
    },
    {
        id: 9,
        title: 'READING CORNER',
        category: 'interior',
        image: 'https://images.pexels.com/photos/1350789/pexels-photo-1350789.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Intimate spaces captured with emotional depth and careful attention to ambient lighting and material textures.',
        year: '2023',
        client: 'COZY SPACES'
    },
    {
        id: 10,
        title: 'SMART HOME INTEGRATION',
        category: 'ai',
        image: 'https://images.pexels.com/photos/2724748/pexels-photo-2724748.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Technology meets design in perfect harmony with AI-assisted composition analysis and smart lighting systems.',
        year: '2024',
        client: 'SMART LIVING'
    },
    {
        id: 11,
        title: 'ARCHITECTURAL DETAILS',
        category: 'editing',
        image: 'https://images.pexels.com/photos/1571457/pexels-photo-1571457.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Precision editing highlights structural beauty and material textures with professional post-processing techniques.',
        year: '2023',
        client: 'DESIGN STUDIO'
    },
    {
        id: 12,
        title: 'PENTHOUSE LIVING',
        category: 'interior',
        image: 'https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Luxury lifestyle photography at its finest with panoramic city views and premium interior design elements.',
        year: '2024',
        client: 'LUXURY LIVING'
    },
    {
        id: 13,
        title: 'MINIMALIST KITCHEN',
        category: 'interior',
        image: 'https://images.pexels.com/photos/2724748/pexels-photo-2724748.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Clean geometric lines and premium materials create a timeless cooking space with functional elegance.',
        year: '2024',
        client: 'MODERN KITCHENS'
    },
    {
        id: 14,
        title: 'AI COLOR GRADING',
        category: 'ai',
        image: 'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Advanced machine learning algorithms optimize color balance and mood with precision and artistic vision.',
        year: '2024',
        client: 'COLOR LABS'
    },
    {
        id: 15,
        title: 'BATHROOM SANCTUARY',
        category: 'editing',
        image: 'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Spa-like atmosphere enhanced through careful post-processing techniques and lighting optimization.',
        year: '2023',
        client: 'WELLNESS SPACES'
    },
    {
        id: 16,
        title: 'ARCHITECTURAL WALKTHROUGH',
        category: 'video',
        image: 'https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Immersive video tour showcasing spatial relationships and design flow with cinematic production values.',
        year: '2024',
        client: 'VIRTUAL TOURS'
    },
    {
        id: 17,
        title: 'GARDEN VIEW LIVING',
        category: 'interior',
        image: 'https://images.pexels.com/photos/667838/pexels-photo-667838.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Indoor-outdoor connection captured through strategic framing and natural light with environmental harmony.',
        year: '2023',
        client: 'GARDEN HOMES'
    },
    {
        id: 18,
        title: 'DEEP LEARNING ENHANCEMENT',
        category: 'ai',
        image: 'https://images.pexels.com/photos/1648776/pexels-photo-1648776.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Neural networks enhance detail and clarity while preserving natural aesthetics and architectural integrity.',
        year: '2024',
        client: 'AI STUDIOS'
    },
    {
        id: 19,
        title: 'TEXTURE & MATERIAL FOCUS',
        category: 'editing',
        image: 'https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Detailed post-processing emphasizes material quality and surface textures with professional precision.',
        year: '2023',
        client: 'MATERIAL LAB'
    },
    {
        id: 20,
        title: 'TIME-LAPSE CONSTRUCTION',
        category: 'video',
        image: 'https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Documentary-style filming capturing the transformation of architectural spaces over time.',
        year: '2024',
        client: 'BUILD CO.'
    },
    {
        id: 21,
        title: 'LOFT CONVERSION',
        category: 'interior',
        image: 'https://images.pexels.com/photos/1350789/pexels-photo-1350789.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Industrial heritage meets contemporary living in this stunning conversion with preserved architectural elements.',
        year: '2023',
        client: 'URBAN LOFTS'
    },
    {
        id: 22,
        title: 'COMPUTATIONAL PHOTOGRAPHY',
        category: 'ai',
        image: 'https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Multiple exposure fusion and HDR processing using machine learning for optimal image quality.',
        year: '2024',
        client: 'COMP PHOTO'
    },
    {
        id: 23,
        title: 'LIGHTING DESIGN FOCUS',
        category: 'editing',
        image: 'https://images.pexels.com/photos/1571457/pexels-photo-1571457.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: 'Professional editing showcases architectural lighting design and ambiance with dramatic enhancement.',
        year: '2023',
        client: 'LIGHT STUDIO'
    },
    {
        id: 24,
        title: 'VIRTUAL REALITY TOUR',
        category: 'video',
        image: 'https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg?auto=compress&cs=tinysrgb&w=1200',
        description: '360-degree immersive experience bringing architectural spaces to life with cutting-edge technology.',
        year: '2024',
        client: 'VR SPACES'
    }
];

// Global Variables
let currentFilter = '*';
let filteredData = [...galleryData];
let currentImageIndex = 0;

// Category Icons
const categoryIcons = {
    interior: 'fas fa-camera',
    ai: 'fas fa-robot',
    editing: 'fas fa-magic',
    video: 'fas fa-video'
};

// Category Names
const categoryNames = {
    interior: 'INTERIOR PHOTOGRAPHY',
    ai: 'AI ENHANCEMENT',
    editing: 'PHOTO EDITING',
    video: 'VIDEO PRODUCTION'
};

// Initialize Gallery
document.addEventListener('DOMContentLoaded', function() {
    initializeGallery();
    setupEventListeners();
    updateStats();
});

function initializeGallery() {
    showLoading();
    
    setTimeout(() => {
        renderGallery();
        hideLoading();
    }, 1000);
}

function setupEventListeners() {
    // Filter buttons
    document.querySelectorAll('.filter-card').forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.dataset.filter;
            setActiveFilter(this, filter);
            filterGallery(filter);
        });
    });

    // Search input
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', debounce(handleSearch, 300));

    // Modal navigation
    document.getElementById('prevBtn').addEventListener('click', showPreviousImage);
    document.getElementById('nextBtn').addEventListener('click', showNextImage);

    // Keyboard navigation
    document.addEventListener('keydown', handleKeyboardNavigation);

    // Smooth scroll for hero
    document.querySelector('.scroll-indicator').addEventListener('click', () => {
        document.querySelector('.filter-section').scrollIntoView({ behavior: 'smooth' });
    });
}

function setActiveFilter(button, filter) {
    document.querySelectorAll('.filter-card').forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');
    currentFilter = filter;
    
    // Update active filter display
    const filterName = filter === '*' ? 'ALL' : filter.toUpperCase();
    document.getElementById('activeFilter').textContent = filterName;
}

function filterGallery(filter) {
    showLoading();
    
    setTimeout(() => {
        if (filter === '*') {
            filteredData = [...galleryData];
        } else {
            filteredData = galleryData.filter(item => item.category === filter);
        }
        
        const searchTerm = document.getElementById('searchInput').value.toLowerCase();
        if (searchTerm) {
            filteredData = filteredData.filter(item => 
                item.title.toLowerCase().includes(searchTerm) ||
                item.description.toLowerCase().includes(searchTerm) ||
                item.client.toLowerCase().includes(searchTerm)
            );
        }
        
        renderGallery();
        updateStats();
        hideLoading();
    }, 600);
}

function handleSearch() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    
    showLoading();
    
    setTimeout(() => {
        if (currentFilter === '*') {
            filteredData = [...galleryData];
        } else {
            filteredData = galleryData.filter(item => item.category === currentFilter);
        }
        
        if (searchTerm) {
            filteredData = filteredData.filter(item => 
                item.title.toLowerCase().includes(searchTerm) ||
                item.description.toLowerCase().includes(searchTerm) ||
                item.client.toLowerCase().includes(searchTerm)
            );
        }
        
        renderGallery();
        updateStats();
        hideLoading();
    }, 400);
}

function renderGallery() {
    const grid = document.getElementById('galleryGrid');
    
    if (filteredData.length === 0) {
        grid.innerHTML = '';
        showNoResults();
        return;
    }
    
    hideNoResults();
    
    grid.innerHTML = filteredData.map((item, index) => `
        <div class="gallery-item fade-in" data-index="${index}" style="animation-delay: ${index * 100}ms">
            <img src="${item.image}" alt="${item.title}" loading="lazy">
            <div class="gallery-overlay">
                <div class="overlay-header">
                    <div class="category-tag">${categoryNames[item.category]}</div>
                    <div class="project-icon">
                        <i class="${categoryIcons[item.category]}"></i>
                    </div>
                </div>
                <div class="overlay-content">
                    <h3 class="project-title">${item.title}</h3>
                    <div class="project-meta">${item.client} • ${item.year}</div>
                </div>
            </div>
        </div>
    `).join('');
    
    // Add click listeners
    grid.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('click', function() {
            const index = parseInt(this.dataset.index);
            openLightbox(index);
        });
    });
}

function openLightbox(index) {
    currentImageIndex = index;
    const item = filteredData[index];
    
    document.getElementById('modalTitle').textContent = item.title;
    document.getElementById('modalClient').textContent = item.client;
    document.getElementById('modalYear').textContent = item.year;
    document.getElementById('modalCategory').textContent = categoryNames[item.category];
    document.getElementById('modalImage').src = item.image;
    document.getElementById('modalImage').alt = item.title;
    document.getElementById('modalDescription').textContent = item.description;
    document.getElementById('modalClientDetail').textContent = item.client;
    document.getElementById('modalYearDetail').textContent = item.year;
    document.getElementById('modalCategoryDetail').textContent = categoryNames[item.category];
    document.getElementById('imageCounter').textContent = `${index + 1} / ${filteredData.length}`;
    
    const modal = new bootstrap.Modal(document.getElementById('lightboxModal'));
    modal.show();
}

function showPreviousImage() {
    currentImageIndex = (currentImageIndex - 1 + filteredData.length) % filteredData.length;
    updateModalContent();
}

function showNextImage() {
    currentImageIndex = (currentImageIndex + 1) % filteredData.length;
    updateModalContent();
}

function updateModalContent() {
    const item = filteredData[currentImageIndex];
    
    document.getElementById('modalTitle').textContent = item.title;
    document.getElementById('modalClient').textContent = item.client;
    document.getElementById('modalYear').textContent = item.year;
    document.getElementById('modalCategory').textContent = categoryNames[item.category];
    document.getElementById('modalImage').src = item.image;
    document.getElementById('modalImage').alt = item.title;
    document.getElementById('modalDescription').textContent = item.description;
    document.getElementById('modalClientDetail').textContent = item.client;
    document.getElementById('modalYearDetail').textContent = item.year;
    document.getElementById('modalCategoryDetail').textContent = categoryNames[item.category];
    document.getElementById('imageCounter').textContent = `${currentImageIndex + 1} / ${filteredData.length}`;
}

function handleKeyboardNavigation(e) {
    const modal = document.getElementById('lightboxModal');
    if (modal.classList.contains('show')) {
        if (e.key === 'ArrowLeft') {
            showPreviousImage();
        } else if (e.key === 'ArrowRight') {
            showNextImage();
        } else if (e.key === 'Escape') {
            bootstrap.Modal.getInstance(modal).hide();
        }
    }
}

function updateStats() {
    document.getElementById('totalProjects').textContent = filteredData.length;
    
    // Update filter counts
    const categories = ['interior', 'ai', 'editing', 'video'];
    categories.forEach(category => {
        const count = galleryData.filter(item => item.category === category).length;
        const filterCard = document.querySelector(`[data-filter="${category}"] .filter-count`);
        if (filterCard) {
            filterCard.textContent = count;
        }
    });
}

function showLoading() {
    document.getElementById('loadingState').style.display = 'block';
    document.getElementById('galleryGrid').style.opacity = '0.3';
}

function hideLoading() {
    document.getElementById('loadingState').style.display = 'none';
    document.getElementById('galleryGrid').style.opacity = '1';
}

function showNoResults() {
    document.getElementById('noResults').style.display = 'block';
}

function hideNoResults() {
    document.getElementById('noResults').style.display = 'none';
}

// Utility function for debouncing
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

// Parallax effect for floating elements
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const parallax = document.querySelectorAll('.float-element');
    
    parallax.forEach((element, index) => {
        const speed = 0.5 + (index * 0.2);
        element.style.transform = `translateY(${scrolled * speed}px) rotate(${scrolled * 0.1}deg)`;
    });
});

// Smooth reveal animation on scroll
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('fade-in');
        }
    });
}, observerOptions);

// Observe gallery items when they're created
function observeGalleryItems() {
    document.querySelectorAll('.gallery-item').forEach(item => {
        observer.observe(item);
    });
}

// Call after rendering gallery
setTimeout(observeGalleryItems, 100);
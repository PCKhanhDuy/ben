// Gallery Data
const portfolioData = [
    {
        id: 1,
        title: 'SCANDINAVIAN MINIMALISM',
        category: 'interior',
        image: 'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Clean lines and natural light define this contemporary living space with carefully curated furniture pieces that embody Nordic design principles.',
        year: '2024',
        client: 'NORDIC HOMES'
    },
    {
        id: 2,
        title: 'AI-ENHANCED KITCHEN',
        category: 'ai',
        image: 'https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Machine learning algorithms enhance lighting and composition for perfect architectural photography with computational precision.',
        year: '2024',
        client: 'TECH HOMES'
    },
    {
        id: 3,
        title: 'LUXURY BEDROOM SUITE',
        category: 'editing',
        image: 'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Professional retouching and color grading mastery showcasing elegant bedroom design with premium material textures.',
        year: '2024',
        client: 'ELITE INTERIORS'
    },
    {
        id: 4,
        title: 'MODERN DINING EXPERIENCE',
        category: 'video',
        image: 'https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Cinematic storytelling through architectural spaces with dynamic camera movements and atmospheric lighting.',
        year: '2024',
        client: 'DINING CO.'
    },
    {
        id: 5,
        title: 'EXECUTIVE OFFICE',
        category: 'interior',
        image: 'https://images.pexels.com/photos/667838/pexels-photo-667838.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Corporate elegance meets functional design in this sophisticated workspace with premium materials and lighting.',
        year: '2023',
        client: 'BUSINESS HUB'
    },
    {
        id: 6,
        title: 'NEURAL STYLE TRANSFER',
        category: 'ai',
        image: 'https://images.pexels.com/photos/1648776/pexels-photo-1648776.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Artistic interpretation through artificial intelligence creating unique visual narratives and enhanced compositions.',
        year: '2024',
        client: 'ART TECH'
    },
    {
        id: 7,
        title: 'HDR LIVING SPACE',
        category: 'editing',
        image: 'https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'High dynamic range processing for perfect exposure balance in challenging lighting conditions with natural results.',
        year: '2023',
        client: 'BRIGHT HOMES'
    },
    {
        id: 8,
        title: 'PROPERTY SHOWCASE FILM',
        category: 'video',
        image: 'https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Complete architectural documentation and storytelling through cinematic techniques and professional production.',
        year: '2024',
        client: 'REAL ESTATE PRO'
    },
    {
        id: 9,
        title: 'READING CORNER',
        category: 'interior',
        image: 'https://images.pexels.com/photos/1350789/pexels-photo-1350789.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Intimate spaces captured with emotional depth and careful attention to ambient lighting and material textures.',
        year: '2023',
        client: 'COZY SPACES'
    },
    {
        id: 10,
        title: 'SMART HOME INTEGRATION',
        category: 'ai',
        image: 'https://images.pexels.com/photos/2724748/pexels-photo-2724748.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Technology meets design in perfect harmony with AI-assisted composition analysis and smart lighting systems.',
        year: '2024',
        client: 'SMART LIVING'
    },
    {
        id: 11,
        title: 'ARCHITECTURAL DETAILS',
        category: 'editing',
        image: 'https://images.pexels.com/photos/1571457/pexels-photo-1571457.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Precision editing highlights structural beauty and material textures with professional post-processing techniques.',
        year: '2023',
        client: 'DESIGN STUDIO'
    },
    {
        id: 12,
        title: 'PENTHOUSE LIVING',
        category: 'interior',
        image: 'https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Luxury lifestyle photography at its finest with panoramic city views and premium interior design elements.',
        year: '2024',
        client: 'LUXURY LIVING'
    },
    {
        id: 13,
        title: 'MINIMALIST KITCHEN',
        category: 'interior',
        image: 'https://images.pexels.com/photos/2724748/pexels-photo-2724748.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Clean geometric lines and premium materials create a timeless cooking space with functional elegance.',
        year: '2024',
        client: 'MODERN KITCHENS'
    },
    {
        id: 14,
        title: 'AI COLOR GRADING',
        category: 'ai',
        image: 'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Advanced machine learning algorithms optimize color balance and mood with precision and artistic vision.',
        year: '2024',
        client: 'COLOR LABS'
    },
    {
        id: 15,
        title: 'BATHROOM SANCTUARY',
        category: 'editing',
        image: 'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Spa-like atmosphere enhanced through careful post-processing techniques and lighting optimization.',
        year: '2023',
        client: 'WELLNESS SPACES'
    },
    {
        id: 16,
        title: 'ARCHITECTURAL WALKTHROUGH',
        category: 'video',
        image: 'https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Immersive video tour showcasing spatial relationships and design flow with cinematic production values.',
        year: '2024',
        client: 'VIRTUAL TOURS'
    },
    {
        id: 17,
        title: 'GARDEN VIEW LIVING',
        category: 'interior',
        image: 'https://images.pexels.com/photos/667838/pexels-photo-667838.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Indoor-outdoor connection captured through strategic framing and natural light with environmental harmony.',
        year: '2023',
        client: 'GARDEN HOMES'
    },
    {
        id: 18,
        title: 'DEEP LEARNING ENHANCEMENT',
        category: 'ai',
        image: 'https://images.pexels.com/photos/1648776/pexels-photo-1648776.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Neural networks enhance detail and clarity while preserving natural aesthetics and architectural integrity.',
        year: '2024',
        client: 'AI STUDIOS'
    },
    {
        id: 19,
        title: 'TEXTURE & MATERIAL FOCUS',
        category: 'editing',
        image: 'https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Detailed post-processing emphasizes material quality and surface textures with professional precision.',
        year: '2023',
        client: 'MATERIAL LAB'
    },
    {
        id: 20,
        title: 'TIME-LAPSE CONSTRUCTION',
        category: 'video',
        image: 'https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Documentary-style filming capturing the transformation of architectural spaces over time.',
        year: '2024',
        client: 'BUILD CO.'
    },
    {
        id: 21,
        title: 'LOFT CONVERSION',
        category: 'interior',
        image: 'https://images.pexels.com/photos/1350789/pexels-photo-1350789.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Industrial heritage meets contemporary living in this stunning conversion with preserved architectural elements.',
        year: '2023',
        client: 'URBAN LOFTS'
    },
    {
        id: 22,
        title: 'COMPUTATIONAL PHOTOGRAPHY',
        category: 'ai',
        image: 'https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Multiple exposure fusion and HDR processing using machine learning for optimal image quality.',
        year: '2024',
        client: 'COMP PHOTO'
    },
    {
        id: 23,
        title: 'LIGHTING DESIGN FOCUS',
        category: 'editing',
        image: 'https://images.pexels.com/photos/1571457/pexels-photo-1571457.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Professional editing showcases architectural lighting design and ambiance with dramatic enhancement.',
        year: '2023',
        client: 'LIGHT STUDIO'
    },
    {
        id: 24,
        title: 'VIRTUAL REALITY TOUR',
        category: 'video',
        image: 'https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: '360-degree immersive experience bringing architectural spaces to life with cutting-edge technology.',
        year: '2024',
        client: 'VR SPACES'
    }
];

// Global Variables
let currentCategory = 'all';
let currentView = 'floating';
let filteredData = [...portfolioData];
let currentProjectIndex = 0;

// Category Icons
const categoryIcons = {
    interior: 'fas fa-home',
    ai: 'fas fa-brain',
    editing: 'fas fa-wand-magic-sparkles',
    video: 'fas fa-film'
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
    }, 1200);
}

function setupEventListeners() {
    // View toggle buttons
    document.querySelectorAll('.toggle-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const view = this.dataset.view;
            setActiveView(this, view);
            switchView(view);
        });
    });

    // Category buttons
    document.querySelectorAll('.category-item').forEach(item => {
        item.addEventListener('click', function() {
            const category = this.dataset.category;
            setActiveCategory(this, category);
            filterGallery(category);
        });
    });

    // Search input
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', debounce(handleSearch, 300));

    // Modal navigation
    document.getElementById('prevProject').addEventListener('click', showPreviousProject);
    document.getElementById('nextProject').addEventListener('click', showNextProject);

    // Keyboard navigation
    document.addEventListener('keydown', handleKeyboardNavigation);
}

function setActiveView(button, view) {
    document.querySelectorAll('.toggle-btn').forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');
    currentView = view;
}

function setActiveCategory(item, category) {
    document.querySelectorAll('.category-item').forEach(cat => cat.classList.remove('active'));
    item.classList.add('active');
    currentCategory = category;
}

function switchView(view) {
    const floatingGallery = document.getElementById('floatingGallery');
    const diagonalGallery = document.getElementById('diagonalGallery');
    
    if (view === 'floating') {
        floatingGallery.style.display = 'grid';
        diagonalGallery.style.display = 'none';
    } else {
        floatingGallery.style.display = 'none';
        diagonalGallery.style.display = 'grid';
    }
    
    renderGallery();
}

function filterGallery(category) {
    showLoading();
    
    setTimeout(() => {
        if (category === 'all') {
            filteredData = [...portfolioData];
        } else {
            filteredData = portfolioData.filter(item => item.category === category);
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
    }, 800);
}

function handleSearch() {
    const searchTerm = document.getElementById('searchInput').value.toLowerCase();
    
    showLoading();
    
    setTimeout(() => {
        if (currentCategory === 'all') {
            filteredData = [...portfolioData];
        } else {
            filteredData = portfolioData.filter(item => item.category === currentCategory);
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
    }, 500);
}

function renderGallery() {
    const floatingGallery = document.getElementById('floatingGallery');
    const diagonalGallery = document.getElementById('diagonalGallery');
    
    if (filteredData.length === 0) {
        floatingGallery.innerHTML = '';
        diagonalGallery.innerHTML = '';
        showNoResults();
        return;
    }
    
    hideNoResults();
    
    if (currentView === 'floating') {
        renderFloatingGallery(floatingGallery);
    } else {
        renderDiagonalGallery(diagonalGallery);
    }
}

function renderFloatingGallery(container) {
    container.innerHTML = filteredData.map((item, index) => `
        <div class="floating-item fade-in" data-index="${index}" style="animation-delay: ${index * 150}ms">
            <img src="${item.image}" alt="${item.title}" loading="lazy">
            <div class="floating-overlay">
                <div class="overlay-top">
                    <div class="category-badge">${categoryNames[item.category]}</div>
                    <div class="project-icon">
                        <i class="${categoryIcons[item.category]}"></i>
                    </div>
                </div>
                <div class="overlay-bottom">
                    <h3 class="project-title">${item.title}</h3>
                    <div class="project-meta">${item.client} • ${item.year}</div>
                </div>
            </div>
        </div>
    `).join('');
    
    addClickListeners(container);
}

function renderDiagonalGallery(container) {
    container.innerHTML = filteredData.map((item, index) => `
        <div class="diagonal-item slide-diagonal" data-index="${index}" style="animation-delay: ${index * 100}ms">
            <img src="${item.image}" alt="${item.title}" loading="lazy">
            <div class="floating-overlay">
                <div class="overlay-top">
                    <div class="category-badge">${categoryNames[item.category]}</div>
                    <div class="project-icon">
                        <i class="${categoryIcons[item.category]}"></i>
                    </div>
                </div>
                <div class="overlay-bottom">
                    <h3 class="project-title">${item.title}</h3>
                    <div class="project-meta">${item.client} • ${item.year}</div>
                </div>
            </div>
        </div>
    `).join('');
    
    addClickListeners(container);
}

function addClickListeners(container) {
    container.querySelectorAll('[data-index]').forEach(item => {
        item.addEventListener('click', function() {
            const index = parseInt(this.dataset.index);
            openProjectModal(index);
        });
    });
}

function openProjectModal(index) {
    currentProjectIndex = index;
    const project = filteredData[index];
    
    document.getElementById('modalTitle').textContent = project.title;
    document.getElementById('modalClient').textContent = project.client;
    document.getElementById('modalYear').textContent = project.year;
    document.getElementById('modalCategory').textContent = categoryNames[project.category];
    document.getElementById('modalImage').src = project.image;
    document.getElementById('modalImage').alt = project.title;
    document.getElementById('modalDescription').textContent = project.description;
    document.getElementById('modalClientDetail').textContent = project.client;
    document.getElementById('modalYearDetail').textContent = project.year;
    document.getElementById('modalCategoryDetail').textContent = categoryNames[project.category];
    document.getElementById('projectCounter').textContent = `${index + 1} / ${filteredData.length}`;
    
    const modal = new bootstrap.Modal(document.getElementById('projectModal'));
    modal.show();
}

function showPreviousProject() {
    currentProjectIndex = (currentProjectIndex - 1 + filteredData.length) % filteredData.length;
    updateModalContent();
}

function showNextProject() {
    currentProjectIndex = (currentProjectIndex + 1) % filteredData.length;
    updateModalContent();
}

function updateModalContent() {
    const project = filteredData[currentProjectIndex];
    
    document.getElementById('modalTitle').textContent = project.title;
    document.getElementById('modalClient').textContent = project.client;
    document.getElementById('modalYear').textContent = project.year;
    document.getElementById('modalCategory').textContent = categoryNames[project.category];
    document.getElementById('modalImage').src = project.image;
    document.getElementById('modalImage').alt = project.title;
    document.getElementById('modalDescription').textContent = project.description;
    document.getElementById('modalClientDetail').textContent = project.client;
    document.getElementById('modalYearDetail').textContent = project.year;
    document.getElementById('modalCategoryDetail').textContent = categoryNames[project.category];
    document.getElementById('projectCounter').textContent = `${currentProjectIndex + 1} / ${filteredData.length}`;
}

function handleKeyboardNavigation(e) {
    const modal = document.getElementById('projectModal');
    if (modal.classList.contains('show')) {
        if (e.key === 'ArrowLeft') {
            showPreviousProject();
        } else if (e.key === 'ArrowRight') {
            showNextProject();
        } else if (e.key === 'Escape') {
            bootstrap.Modal.getInstance(modal).hide();
        }
    }
}

function updateStats() {
    document.getElementById('totalCount').textContent = filteredData.length;
    
    // Update category counts
    const categories = ['interior', 'ai', 'editing', 'video'];
    categories.forEach(category => {
        const count = portfolioData.filter(item => item.category === category).length;
        const categoryItem = document.querySelector(`[data-category="${category}"] .category-count`);
        if (categoryItem) {
            categoryItem.textContent = count;
        }
    });
}

function showLoading() {
    document.getElementById('loadingContainer').style.display = 'block';
    document.getElementById('floatingGallery').style.opacity = '0.3';
    document.getElementById('diagonalGallery').style.opacity = '0.3';
}

function hideLoading() {
    document.getElementById('loadingContainer').style.display = 'none';
    document.getElementById('floatingGallery').style.opacity = '1';
    document.getElementById('diagonalGallery').style.opacity = '1';
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

// Parallax effect for preview cards
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const previewCards = document.querySelectorAll('.preview-card');
    
    previewCards.forEach((card, index) => {
        const speed = 0.3 + (index * 0.1);
        const yPos = -(scrolled * speed);
        card.style.transform = `translateY(${yPos}px) rotate(${scrolled * 0.02}deg)`;
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
    document.querySelectorAll('.floating-item, .diagonal-item').forEach(item => {
        observer.observe(item);
    });
}

// Call after rendering gallery
setTimeout(observeGalleryItems, 200);
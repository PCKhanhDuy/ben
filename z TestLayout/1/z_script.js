// Gallery Data
const galleryData = [
    {
        id: 1,
        title: 'Scandinavian Minimalism',
        category: 'interior',
        image: 'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Clean lines and natural light define this contemporary living space with carefully curated furniture pieces.',
        year: '2024',
        client: 'Nordic Homes',
        height: 400
    },
    {
        id: 2,
        title: 'AI-Enhanced Kitchen',
        category: 'ai',
        image: 'https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Machine learning algorithms enhance lighting and composition for perfect architectural photography.',
        year: '2024',
        client: 'Tech Homes',
        height: 300
    },
    {
        id: 3,
        title: 'Luxury Bedroom Suite',
        category: 'editing',
        image: 'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Professional retouching and color grading mastery showcasing elegant bedroom design.',
        year: '2024',
        client: 'Elite Interiors',
        height: 500
    },
    {
        id: 4,
        title: 'Modern Dining Experience',
        category: 'video',
        image: 'https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Cinematic storytelling through architectural spaces with dynamic camera movements.',
        year: '2024',
        client: 'Dining Co.',
        height: 350
    },
    {
        id: 5,
        title: 'Executive Office',
        category: 'interior',
        image: 'https://images.pexels.com/photos/667838/pexels-photo-667838.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Corporate elegance meets functional design in this sophisticated workspace.',
        year: '2023',
        client: 'Business Hub',
        height: 450
    },
    {
        id: 6,
        title: 'Neural Style Transfer',
        category: 'ai',
        image: 'https://images.pexels.com/photos/1648776/pexels-photo-1648776.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Artistic interpretation through artificial intelligence creating unique visual narratives.',
        year: '2024',
        client: 'Art Tech',
        height: 320
    },
    {
        id: 7,
        title: 'HDR Living Space',
        category: 'editing',
        image: 'https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'High dynamic range processing for perfect exposure balance in challenging lighting.',
        year: '2023',
        client: 'Bright Homes',
        height: 380
    },
    {
        id: 8,
        title: 'Property Showcase Film',
        category: 'video',
        image: 'https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Complete architectural documentation and storytelling through cinematic techniques.',
        year: '2024',
        client: 'Real Estate Pro',
        height: 420
    },
    {
        id: 9,
        title: 'Reading Corner',
        category: 'interior',
        image: 'https://images.pexels.com/photos/1350789/pexels-photo-1350789.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Intimate spaces captured with emotional depth and careful attention to ambient lighting.',
        year: '2023',
        client: 'Cozy Spaces',
        height: 360
    },
    {
        id: 10,
        title: 'Smart Home Integration',
        category: 'ai',
        image: 'https://images.pexels.com/photos/2724748/pexels-photo-2724748.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Technology meets design in perfect harmony with AI-assisted composition analysis.',
        year: '2024',
        client: 'Smart Living',
        height: 340
    },
    {
        id: 11,
        title: 'Architectural Details',
        category: 'editing',
        image: 'https://images.pexels.com/photos/1571457/pexels-photo-1571457.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Precision editing highlights structural beauty and material textures.',
        year: '2023',
        client: 'Design Studio',
        height: 480
    },
    {
        id: 12,
        title: 'Penthouse Living',
        category: 'interior',
        image: 'https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Luxury lifestyle photography at its finest with panoramic city views.',
        year: '2024',
        client: 'Luxury Living',
        height: 400
    },
    {
        id: 13,
        title: 'Minimalist Kitchen',
        category: 'interior',
        image: 'https://images.pexels.com/photos/2724748/pexels-photo-2724748.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Clean geometric lines and premium materials create a timeless cooking space.',
        year: '2024',
        client: 'Modern Kitchens',
        height: 350
    },
    {
        id: 14,
        title: 'AI Color Grading',
        category: 'ai',
        image: 'https://images.pexels.com/photos/1571460/pexels-photo-1571460.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Advanced machine learning algorithms optimize color balance and mood.',
        year: '2024',
        client: 'Color Labs',
        height: 390
    },
    {
        id: 15,
        title: 'Bathroom Sanctuary',
        category: 'editing',
        image: 'https://images.pexels.com/photos/164595/pexels-photo-164595.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Spa-like atmosphere enhanced through careful post-processing techniques.',
        year: '2023',
        client: 'Wellness Spaces',
        height: 460
    },
    {
        id: 16,
        title: 'Architectural Walkthrough',
        category: 'video',
        image: 'https://images.pexels.com/photos/1080721/pexels-photo-1080721.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Immersive video tour showcasing spatial relationships and design flow.',
        year: '2024',
        client: 'Virtual Tours',
        height: 320
    },
    {
        id: 17,
        title: 'Garden View Living',
        category: 'interior',
        image: 'https://images.pexels.com/photos/667838/pexels-photo-667838.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Indoor-outdoor connection captured through strategic framing and natural light.',
        year: '2023',
        client: 'Garden Homes',
        height: 410
    },
    {
        id: 18,
        title: 'Deep Learning Enhancement',
        category: 'ai',
        image: 'https://images.pexels.com/photos/1648776/pexels-photo-1648776.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Neural networks enhance detail and clarity while preserving natural aesthetics.',
        year: '2024',
        client: 'AI Studios',
        height: 370
    },
    {
        id: 19,
        title: 'Texture & Material Focus',
        category: 'editing',
        image: 'https://images.pexels.com/photos/1571453/pexels-photo-1571453.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Detailed post-processing emphasizes material quality and surface textures.',
        year: '2023',
        client: 'Material Lab',
        height: 330
    },
    {
        id: 20,
        title: 'Time-lapse Construction',
        category: 'video',
        image: 'https://images.pexels.com/photos/1571468/pexels-photo-1571468.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Documentary-style filming capturing the transformation of architectural spaces.',
        year: '2024',
        client: 'Build Co.',
        height: 440
    },
    {
        id: 21,
        title: 'Loft Conversion',
        category: 'interior',
        image: 'https://images.pexels.com/photos/1350789/pexels-photo-1350789.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Industrial heritage meets contemporary living in this stunning conversion.',
        year: '2023',
        client: 'Urban Lofts',
        height: 380
    },
    {
        id: 22,
        title: 'Computational Photography',
        category: 'ai',
        image: 'https://images.pexels.com/photos/2724749/pexels-photo-2724749.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Multiple exposure fusion and HDR processing using machine learning.',
        year: '2024',
        client: 'Comp Photo',
        height: 350
    },
    {
        id: 23,
        title: 'Lighting Design Focus',
        category: 'editing',
        image: 'https://images.pexels.com/photos/1571457/pexels-photo-1571457.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: 'Professional editing showcases architectural lighting design and ambiance.',
        year: '2023',
        client: 'Light Studio',
        height: 420
    },
    {
        id: 24,
        title: 'Virtual Reality Tour',
        category: 'video',
        image: 'https://images.pexels.com/photos/1571463/pexels-photo-1571463.jpeg?auto=compress&cs=tinysrgb&w=800',
        description: '360-degree immersive experience bringing architectural spaces to life.',
        year: '2024',
        client: 'VR Spaces',
        height: 390
    }
];

// Global Variables
let currentFilter = '*';
let currentView = 'masonry';
let filteredData = [...galleryData];
let currentImageIndex = 0;
let masonry = null;

// Category Icons
const categoryIcons = {
    interior: 'fas fa-camera',
    ai: 'fas fa-magic',
    editing: 'fas fa-edit',
    video: 'fas fa-video'
};

// Category Names
const categoryNames = {
    interior: 'Interior Photography',
    ai: 'AI Enhancement',
    editing: 'Photo Editing',
    video: 'Video Production'
};

// Initialize Gallery
document.addEventListener('DOMContentLoaded', function() {
    initializeGallery();
    setupEventListeners();
    updateProjectCount();
});

function initializeGallery() {
    showLoading();
    
    setTimeout(() => {
        renderGallery();
        hideLoading();
    }, 800);
}

function setupEventListeners() {
    // Filter buttons
    document.querySelectorAll('.filter-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const filter = this.dataset.filter;
            setActiveFilter(this, filter);
            filterGallery(filter);
        });
    });

    // Search input
    const searchInput = document.getElementById('searchInput');
    searchInput.addEventListener('input', debounce(handleSearch, 300));

    // View toggle
    document.querySelectorAll('.view-btn').forEach(btn => {
        btn.addEventListener('click', function() {
            const view = this.dataset.view;
            setActiveView(this, view);
            switchView(view);
        });
    });

    // Modal navigation
    document.getElementById('prevBtn').addEventListener('click', showPreviousImage);
    document.getElementById('nextBtn').addEventListener('click', showNextImage);

    // Keyboard navigation
    document.addEventListener('keydown', handleKeyboardNavigation);
}

function setActiveFilter(button, filter) {
    document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');
    currentFilter = filter;
}

function setActiveView(button, view) {
    document.querySelectorAll('.view-btn').forEach(btn => btn.classList.remove('active'));
    button.classList.add('active');
    currentView = view;
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
        updateProjectCount();
        hideLoading();
    }, 400);
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
        updateProjectCount();
        hideLoading();
    }, 300);
}

function switchView(view) {
    const masonryGrid = document.getElementById('masonryGrid');
    const listView = document.getElementById('listView');
    
    if (view === 'masonry') {
        masonryGrid.classList.remove('d-none');
        listView.classList.add('d-none');
        currentView = 'masonry';
        renderMasonryView();
    } else {
        masonryGrid.classList.add('d-none');
        listView.classList.remove('d-none');
        currentView = 'list';
        renderListView();
    }
}

function renderGallery() {
    if (currentView === 'masonry') {
        renderMasonryView();
    } else {
        renderListView();
    }
    
    checkNoResults();
}

function renderMasonryView() {
    const grid = document.getElementById('masonryGrid');
    
    if (filteredData.length === 0) {
        grid.innerHTML = '';
        return;
    }
    
    grid.innerHTML = filteredData.map((item, index) => `
        <div class="gallery-item fade-in" data-index="${index}" style="animation-delay: ${index * 50}ms">
            <img src="${item.image}" alt="${item.title}" style="height: ${item.height}px; object-fit: cover;">
            <div class="gallery-overlay">
                <div class="overlay-content">
                    <h3>${item.title}</h3>
                    <p>${item.client} • ${item.year}</p>
                </div>
            </div>
            <div class="category-badge-overlay">
                <i class="${categoryIcons[item.category]}"></i>
                ${categoryNames[item.category]}
            </div>
            ${item.category === 'video' ? '<div class="video-indicator"><i class="fas fa-play"></i></div>' : ''}
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

function renderListView() {
    const listView = document.getElementById('listView');
    
    if (filteredData.length === 0) {
        listView.innerHTML = '';
        return;
    }
    
    listView.innerHTML = filteredData.map((item, index) => `
        <div class="list-item slide-up" data-index="${index}" style="animation-delay: ${index * 100}ms">
            <div class="list-item-image">
                <img src="${item.image}" alt="${item.title}">
            </div>
            <div class="list-item-content">
                <div class="list-item-info">
                    <h3>${item.title}</h3>
                    <p class="text-muted">${item.description}</p>
                    <div class="list-item-meta">
                        <span>${item.client}</span>
                        <span>•</span>
                        <span>${item.year}</span>
                        <span>•</span>
                        <span>${categoryNames[item.category]}</span>
                    </div>
                </div>
                <div class="list-item-arrow">
                    <i class="fas fa-arrow-right fa-lg"></i>
                </div>
            </div>
        </div>
    `).join('');
    
    // Add click listeners
    listView.querySelectorAll('.list-item').forEach(item => {
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
    document.getElementById('modalSubtitle').textContent = `${item.client} • ${item.year}`;
    document.getElementById('modalImage').src = item.image;
    document.getElementById('modalImage').alt = item.title;
    document.getElementById('modalDescription').textContent = item.description;
    document.getElementById('modalCategory').innerHTML = `
        <i class="${categoryIcons[item.category]}"></i>
        ${categoryNames[item.category]}
    `;
    document.getElementById('modalClient').textContent = item.client;
    document.getElementById('modalYear').textContent = item.year;
    document.getElementById('imageCounter').textContent = `${index + 1} / ${filteredData.length}`;
    
    const modal = new bootstrap.Modal(document.getElementById('lightboxModal'));
    modal.show();
}

function showPreviousImage() {
    currentImageIndex = (currentImageIndex - 1 + filteredData.length) % filteredData.length;
    openLightbox(currentImageIndex);
}

function showNextImage() {
    currentImageIndex = (currentImageIndex + 1) % filteredData.length;
    openLightbox(currentImageIndex);
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

function updateProjectCount() {
    document.getElementById('projectCount').textContent = filteredData.length;
    
    // Update filter badges
    const categories = ['interior', 'ai', 'editing', 'video'];
    categories.forEach(category => {
        const count = galleryData.filter(item => item.category === category).length;
        const filterBtn = document.querySelector(`[data-filter=".${category}"] .badge`);
        if (filterBtn) {
            filterBtn.textContent = count;
        }
    });
    
    // Update "All Projects" badge
    const allBtn = document.querySelector('[data-filter="*"] .badge');
    if (allBtn) {
        allBtn.textContent = galleryData.length;
    }
}

function checkNoResults() {
    const noResults = document.getElementById('noResults');
    if (filteredData.length === 0) {
        noResults.classList.remove('d-none');
    } else {
        noResults.classList.add('d-none');
    }
}

function showLoading() {
    document.getElementById('loadingSpinner').style.display = 'block';
    document.getElementById('masonryGrid').style.opacity = '0.5';
    document.getElementById('listView').style.opacity = '0.5';
}

function hideLoading() {
    document.getElementById('loadingSpinner').style.display = 'none';
    document.getElementById('masonryGrid').style.opacity = '1';
    document.getElementById('listView').style.opacity = '1';
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

// Smooth scroll to top when filter changes
function scrollToTop() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
}
// //
// let hamburgerIcon = document.querySelector('.hamburger-icon');
// let linksMenu = document.querySelector('.links');
// let icon = document.querySelector('.icon-container');
// let parent = document.querySelector('.nav');


// hamburgerIcon.addEventListener('click', () => {
//   linksMenu.classList.toggle('show');
//     icon.classList.toggle('show');


// });
// /

// window.addEventListener('resize', () => {
//   if (window.innerWidth > 768) {
//     linksMenu.classList.remove('show');
//     icon.classList.remove('show');
//   }
// });

// $(document).ready(function () {
//     $(".filter-btn").click(function () {
//         $(".filter-btn").removeClass("active");
//         $(this).addClass("active");

//         let filterValue = $(this).attr("data-filter");

//         if (filterValue === "all") {
//             $(".product-card").fadeIn(200);
//         } else {
//             $(".product-card").hide();
//             $(`.product-card[data-category='${filterValue}']`).fadeIn(200);
//         }
//     });
// });



// Sample product data
const products = [
    // Premium Suits
    {
        id: 1,
        name: "Classic Black Business Suit",
        category: "premium-suits",
        brand: "brand-luxury",
        price: 1200,
        priceRange: "price-over-1000",
        description: "Elegant black business suit with premium wool fabric, perfect for corporate meetings and formal events.",
        image: "👔"
    },
    {
        id: 2,
        name: "Navy Blue Executive Suit",
        category: "premium-suits",
        brand: "brand-premium",
        price: 850,
        priceRange: "price-500-1000",
        description: "Sophisticated navy blue suit with modern cut and comfortable fit for the discerning professional.",
        image: "👔"
    },
    {
        id: 3,
        name: "Charcoal Grey Premium Suit",
        category: "premium-suits",
        brand: "brand-exclusive",
        price: 450,
        priceRange: "price-under-500",
        description: "Classic charcoal grey suit with Italian styling and premium materials at an accessible price.",
        image: "👔"
    },
    {
        id: 4,
        name: "Double-Breasted Luxury Suit",
        category: "premium-suits",
        brand: "brand-luxury",
        price: 1500,
        priceRange: "price-over-1000",
        description: "Bold double-breasted design with hand-stitched details and premium Italian wool.",
        image: "👔"
    },

    // Premium Women Dresses
    {
        id: 5,
        name: "Evening Gown - Midnight Blue",
        category: "premium-dresses",
        brand: "brand-luxury",
        price: 1800,
        priceRange: "price-over-1000",
        description: "Stunning evening gown with sequin embellishments and flowing silk fabric for special occasions.",
        image: "👗"
    },
    {
        id: 6,
        name: "Cocktail Dress - Rose Gold",
        category: "premium-dresses",
        brand: "brand-premium",
        price: 750,
        priceRange: "price-500-1000",
        description: "Elegant cocktail dress with metallic rose gold finish, perfect for parties and celebrations.",
        image: "👗"
    },
    {
        id: 7,
        name: "Business Dress - Professional Black",
        category: "premium-dresses",
        brand: "brand-premium",
        price: 380,
        priceRange: "price-under-500",
        description: "Professional business dress with modern silhouette and comfortable stretch fabric.",
        image: "👗"
    },
    {
        id: 8,
        name: "Summer Maxi Dress - Floral Print",
        category: "premium-dresses",
        brand: "brand-exclusive",
        price: 420,
        priceRange: "price-under-500",
        description: "Beautiful summer maxi dress with vibrant floral print and lightweight, breathable fabric.",
        image: "👗"
    },
    {
        id: 9,
        name: "Designer Ball Gown - Crystal White",
        category: "premium-dresses",
        brand: "brand-luxury",
        price: 2200,
        priceRange: "price-over-1000",
        description: "Exquisite designer ball gown with crystal embellishments and luxurious silk satin fabric.",
        image: "👗"
    },

    // Premium Accessories
    {
        id: 10,
        name: "Leather Portfolio Briefcase",
        category: "premium-accessories",
        brand: "brand-luxury",
        price: 650,
        priceRange: "price-500-1000",
        description: "Handcrafted leather briefcase with brass hardware and multiple compartments for organization.",
        image: "💼"
    },
    {
        id: 11,
        name: "Silk Scarf Collection",
        category: "premium-accessories",
        brand: "brand-premium",
        price: 180,
        priceRange: "price-under-500",
        description: "Collection of three silk scarves with hand-rolled edges and exclusive designer patterns.",
        image: "🧣"
    },
    {
        id: 12,
        name: "Premium Watch - Silver Dial",
        category: "premium-accessories",
        brand: "brand-luxury",
        price: 2800,
        priceRange: "price-over-1000",
        description: "Luxury timepiece with Swiss movement, sapphire crystal, and premium stainless steel construction.",
        image: "⌚"
    },
    {
        id: 13,
        name: "Designer Sunglasses - Aviator",
        category: "premium-accessories",
        brand: "brand-premium",
        price: 320,
        priceRange: "price-under-500",
        description: "Classic aviator sunglasses with polarized lenses and premium metal frame construction.",
        image: "🕶️"
    },
    {
        id: 14,
        name: "Leather Wallet - Premium Brown",
        category: "premium-accessories",
        brand: "brand-exclusive",
        price: 95,
        priceRange: "price-under-500",
        description: "Handcrafted leather wallet with multiple card slots and RFID protection technology.",
        image: "👛"
    },
    {
        id: 15,
        name: "Diamond Stud Earrings",
        category: "premium-accessories",
        brand: "brand-luxury",
        price: 3500,
        priceRange: "price-over-1000",
        description: "Exquisite diamond stud earrings with VS1 clarity and excellent cut for maximum brilliance.",
        image: "💎"
    }
];

// jQuery Document Ready
$(document).ready(function() {
    displayProducts(products);
    setupEventListeners();
});

// Setup event listeners for all checkboxes using jQuery
function setupEventListeners() {
    $('input[type="checkbox"]').on('change', debouncedFilter);
}

// Filter products based on selected checkboxes
function filterProducts() {
    const selectedCategories = getSelectedValues('premium-suits', 'premium-dresses', 'premium-accessories');
    const selectedPriceRanges = getSelectedValues('price-under-500', 'price-500-1000', 'price-over-1000');
    const selectedBrands = getSelectedValues('brand-luxury', 'brand-premium', 'brand-exclusive');

    const filteredProducts = products.filter(product => {
        const categoryMatch = selectedCategories.includes(product.category);
        const priceMatch = selectedPriceRanges.includes(product.priceRange);
        const brandMatch = selectedBrands.includes(product.brand);

        return categoryMatch && priceMatch && brandMatch;
    });

    displayProducts(filteredProducts);
    updateProductCount(filteredProducts.length);
}

// Get selected values for a group of checkboxes using jQuery
function getSelectedValues(...checkboxIds) {
    const selectedValues = [];
    checkboxIds.forEach(id => {
        const $checkbox = $('#' + id);
        if ($checkbox.length && $checkbox.is(':checked')) {
            selectedValues.push(id);
        }
    });
    return selectedValues;
}

// Display products in the grid using jQuery
function displayProducts(productsToShow) {
    const $productsGrid = $('#products-grid');
    
    if (productsToShow.length === 0) {
        $productsGrid.html(`
            <div class="no-products">
                <h3>No Products Found</h3>
                <p>Try adjusting your filter criteria to see more products.</p>
            </div>
        `);
        return;
    }

    const productsHTML = productsToShow.map(product => `
        <div class="product-card" data-category="${product.category}" data-brand="${product.brand}" data-price-range="${product.priceRange}">
            <div class="product-image">
                ${product.image}
            </div>
            <div class="product-info">
                <h3 class="product-title">${product.name}</h3>
                <p class="product-category">${getCategoryDisplayName(product.category)}</p>
                <p class="product-brand">${getBrandDisplayName(product.brand)}</p>
                <p class="product-price">$${product.price.toLocaleString()}</p>
                <p class="product-description">${product.description}</p>
            </div>
        </div>
    `).join('');

    $productsGrid.html(productsHTML);
    
    // Add smooth animations with jQuery
    addSmoothAnimations();
}

// Update product count display using jQuery
function updateProductCount(count) {
    const $productCount = $('#product-count');
    if (count === products.length) {
        $productCount.text('Showing all products');
    } else {
        $productCount.text(`Showing ${count} of ${products.length} products`);
    }
}

// Get display names for categories
function getCategoryDisplayName(category) {
    const categoryNames = {
        'premium-suits': 'Premium Suits',
        'premium-dresses': 'Premium Women Dresses',
        'premium-accessories': 'Premium Accessories'
    };
    return categoryNames[category] || category;
}

// Get display names for brands
function getBrandDisplayName(brand) {
    const brandNames = {
        'brand-luxury': 'Luxury Brands',
        'brand-premium': 'Premium Brands',
        'brand-exclusive': 'Exclusive Brands'
    };
    return brandNames[brand] || brand;
}

// Add smooth animations for better user experience using jQuery
function addSmoothAnimations() {
    $('.product-card').each(function(index) {
        $(this).css('animation-delay', `${index * 0.1}s`);
    });
}

// Enhanced filter with debouncing for better performance
let filterTimeout;
function debouncedFilter() {
    clearTimeout(filterTimeout);
    filterTimeout = setTimeout(filterProducts, 150);
}

// Add keyboard navigation support using jQuery
$(document).on('keydown', function(e) {
    if (e.key === 'Escape') {
        // Reset all filters to checked state
        $('input[type="checkbox"]').prop('checked', true);
        filterProducts();
    }
});

// Add filter reset functionality using jQuery
function resetFilters() {
    $('input[type="checkbox"]').prop('checked', true);
    filterProducts();
}

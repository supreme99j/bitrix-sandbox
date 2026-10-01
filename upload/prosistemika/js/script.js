document.addEventListener('DOMContentLoaded', () => {
	const catalogSections = document.querySelectorAll('.catalog');
	const catalogSectionsCtx = [];

	catalogSections.forEach(section => {
		const tabs = section.querySelector('.catalog__tabs');
		const sliders = section.querySelectorAll('.catalog__slider');
		const nav = section.querySelector('.catalog__nav');
		const arrowPrev = section.querySelector('.catalog__arrow--prev');
		const arrowNext = section.querySelector('.catalog__arrow--next');
		const swipers = {};
		const ctx = { section, tabs, sliders, nav, arrowPrev, arrowNext, swipers, active: null };
		catalogSectionsCtx.push(ctx);

		ctx.refreshNav = () => {
			if (!nav) return;
			const locked = !ctx.active || ctx.active.isLocked;
			nav.classList.toggle('catalog__nav--hidden', locked);
			if (arrowPrev) arrowPrev.disabled = !ctx.active || ctx.active.isBeginning;
			if (arrowNext) arrowNext.disabled = !ctx.active || ctx.active.isEnd;
		};

		ctx.switchTab = name => {
			sliders.forEach(slider => {
				slider.hidden = slider.dataset.tab !== name;
			});
			ctx.active = swipers[name] || null;
			if (ctx.active) ctx.active.update();
			ctx.refreshNav();
		};

		if (tabs) {
			tabs.querySelectorAll('.catalog__tab').forEach(tab => {
				tab.addEventListener('click', () => {
					if (tab.classList.contains('catalog__tab--active')) {
						tabs.classList.toggle('catalog__tabs--open');
						return;
					}
					tabs.querySelectorAll('.catalog__tab').forEach(t => t.classList.remove('catalog__tab--active'));
					tab.classList.add('catalog__tab--active');
					tabs.classList.remove('catalog__tabs--open');
					ctx.switchTab(tab.dataset.tab);
				});
			});

			document.addEventListener('click', e => {
				if (!tabs.contains(e.target)) tabs.classList.remove('catalog__tabs--open');
			});
		}

		if (arrowPrev) arrowPrev.addEventListener('click', () => ctx.active && ctx.active.slidePrev());
		if (arrowNext) arrowNext.addEventListener('click', () => ctx.active && ctx.active.slideNext());
	});
	
	const catalogBtn = document.querySelector('.header__catalog');
	const catalogBurger = document.querySelector('.header__burger');
	const catalogMenu = document.querySelector('.catalog-menu');
	if (catalogMenu) {
		const catalogClose = catalogMenu.querySelector('.catalog-menu__close');
		const catalogToggle = catalogMenu.querySelector('.catalog-menu__toggle');
		const catalogBody = catalogMenu.querySelector('.catalog-menu__body');
		const triggers = [catalogBtn, catalogBurger].filter(Boolean);
		triggers.forEach(trigger => {
			trigger.addEventListener('click', (e) => {
				e.stopPropagation();
				catalogMenu.classList.toggle('catalog-menu--open');
			});
		});
		if (catalogClose) {
			catalogClose.addEventListener('click', () => {
				catalogMenu.classList.remove('catalog-menu--open');
			});
		}
		if (catalogToggle && catalogBody) {
			catalogToggle.addEventListener('click', () => {
				catalogBody.classList.toggle('catalog-menu__body--open');
				catalogToggle.classList.toggle('catalog-menu__toggle--open');
			});
		}
		document.addEventListener('click', (e) => {
			if (catalogMenu.contains(e.target)) return;
			if (triggers.some(t => t.contains(e.target))) return;
			catalogMenu.classList.remove('catalog-menu--open');
		});
	}
	
	if (document.querySelector('.news__slider')) {
		new Swiper('.news__slider', {
			slidesPerGroup: 1,
			spaceBetween: 13,
			breakpoints: {
				0: {
					slidesPerView: 1.2,
				},
				601: {
					slidesPerView: 2.2,
				},
				1201: {
					slidesPerView: 4,
				}
			}
		});
	}
	
	if (document.querySelector('.hero__slider')) {
		new Swiper('.hero-swiper', {
			loop: true,
			navigation: {
				prevEl: '.hero__arrow--prev',
				nextEl: '.hero__arrow--next',
			},
			pagination: {
				el: '.hero__dots',
				clickable: true,
				bulletClass: 'hero__dot',
				bulletActiveClass: 'hero__dot--active',
			},
		});
	}
	
	if (document.querySelector('.diller__slider')) {
		new Swiper('.diller-swiper', {
			loop: true,
			pagination: {
				el: '.diller__dots',
				clickable: true,
				bulletClass: 'diller__dot',
				bulletActiveClass: 'diller__dot--active',
			},
		});
	}

	if (document.querySelector('.letters__slider')) {
		new Swiper('.letters__slider', {
			slidesPerView: 1.3,
			spaceBetween: 16,
			watchOverflow: true,
			navigation: {
				prevEl: '.letters__arrow--prev',
				nextEl: '.letters__arrow--next',
				disabledClass: 'letters__arrow--disabled',
			},
			breakpoints: {
				601: {
					slidesPerView: 2.4,
					spaceBetween: 20,
				},
				1201: {
					slidesPerView: 4,
					spaceBetween: 24,
				},
			},
		});
	}
	
	catalogSectionsCtx.forEach((ctx, i) => {
		ctx.sliders.forEach((slider, j) => {
			const name = slider.dataset.tab || `__default-${i}-${j}`;
			const dots = slider.querySelector('.catalog__dots');
			const swiper = new Swiper(slider.querySelector('.swiper'), {
				slidesPerView: 'auto',
				spaceBetween: 10,
				watchOverflow: true,
				grid: {
					rows: 1,
					fill: 'row',
				},
				breakpoints: {
					601: {
						grid: {
							rows: 2,
							fill: 'row',
						},
					},
				},
				pagination: dots ? {
					el: dots,
					clickable: true,
					bulletClass: 'catalog__dot',
					bulletActiveClass: 'catalog__dot--active',
				} : false,
				on: {
					init: ctx.refreshNav,
					resize: ctx.refreshNav,
					slideChange: ctx.refreshNav,
					lock: ctx.refreshNav,
					unlock: ctx.refreshNav,
				},
			});
			ctx.swipers[name] = swiper;
			if (!slider.hasAttribute('hidden') && !ctx.active) ctx.active = swiper;
		});
		ctx.refreshNav();
	});


	const price_filters = document.querySelectorAll('.price-filter');
	price_filters.forEach(price_filter => {
		const el_slider = price_filter.querySelector('.price-filter__slider');
		
		noUiSlider.create(el_slider, {
			start  : [+price_filter.dataset['priceSliderFrom'], +price_filter.dataset['priceSliderTo']],
			connect: true,
			range  : {
				'min': +price_filter.dataset['priceSliderFrom'],
				'max': +price_filter.dataset['priceSliderTo'],
			}
		});
	
		const price_from = price_filter.querySelector('.price-filter__from');
		const price_to   = price_filter.querySelector('.price-filter__to');
		const price_inps = [price_from, price_to];
	
		el_slider.noUiSlider.on('update', function(values, handle) {
			price_inps[handle].value = Math.round(values[handle]);
		});
	
		const setRangeSlider = (i, value) => {
			let arr = [null, null];
			arr[i] = value;
	
			el_slider.noUiSlider.set(arr);
		};
	
		price_inps.forEach((el, index) => {
			el.addEventListener('change', (e) => {
				setRangeSlider(index, e.currentTarget.value);
			});
		});
	});

	const filters_cells = document.querySelectorAll('.filters__cell--accordion');
	filters_cells.forEach(filters_cell => {
		const title = filters_cell.querySelector('.filters__title');
		const body  = filters_cell.querySelector('.filters__body');
		let   open  = true;

		title.addEventListener('click', () => {
			toggleItem(title, body);
		})
	});

	if (window.innerWidth <= 900) {
		const filters_toggler  = document.querySelector('.filters__toggler');
		const filters_dropdown = document.querySelector('.filters__dropdown');

		if (filters_toggler && filters_dropdown) {
			filters_toggler.addEventListener('click', () => {
				toggleItem(filters_toggler, filters_dropdown);
			});
		}
	}


	if (document.querySelector('.product__image .swiper')) {
        const product_image_thumbs = new Swiper(
            document.querySelector('.product__thumbs .swiper'),
            {
				spaceBetween: 12,
				breakpoints: {
					0: {
						direction: 'horizontal',
						slidesPerView: 5,
					},
					601: {
						direction: 'vertical',
						slidesPerView: 'auto',
					},
					901: {
						direction: 'horizontal',
						slidesPerView: 4,
					}
				}
            }
        );
        
        new Swiper(
            document.querySelector('.product__image .swiper'),
            {
                slidesPerView: 1,
                spaceBetween: 16,
                thumbs: {
                    swiper: product_image_thumbs
                }
            }
        );
    }

	const product_info_heads    = document.querySelectorAll('.product-info__head');
	const product_info_contents = document.querySelectorAll('.product-info__content');
	product_info_heads.forEach((product_info_head,idx) => {
		product_info_head.addEventListener('click', () => {
			product_info_heads   .forEach(h=>h.classList.remove('product-info__head--active'));
			product_info_contents.forEach(h=>h.classList.remove('product-info__content--active'));

			product_info_head         .classList.add('product-info__head--active');
			product_info_contents[idx].classList.add('product-info__content--active');
		});
	});


	const modal_callers = document.querySelectorAll("[data-modal]");
    modal_callers.forEach((modal_caller) => {
        modal_caller.addEventListener("click", () => {
            const modal = document.querySelector("#modal-" + modal_caller.dataset.modal);

            openModal(modal);
        });
    });

    const modals = document.querySelectorAll(".modal");
    modals.forEach((modal) => {
        const closers = modal.querySelectorAll("[data-close]");

        closers.forEach((closer) => {
            closer.addEventListener("click", () => {
                closeModal(modal);
            });
        });
    });


	const mask_fields = document.querySelectorAll('[data-mask]');
	mask_fields.forEach((field) => {
		const mask  = field.dataset.mask;
		const start = mask.indexOf('9');
		if (start === -1) return;

		const length = mask.split('9').length - 1;
		const head   = mask.slice(0, start);
		const code   = head.replace(/\D/g, '');

		const format = (value) => {
			// начало маски (например «+7 (») уже набрано — его цифры не считаем
			let i = 0;
			while (i < head.length && i < value.length && value[i] === head[i]) i++;

			let nums = value.slice(i).replace(/\D/g, '');

			// номер вставили целиком: с кодом страны 7 или 8
			if (code && nums.length > length && (nums[0] === code[0] || nums[0] === '8')) {
				nums = nums.slice(1);
			}
			nums = nums.slice(0, length);

			let out = '';
			let idx = 0;
			for (let i = 0; i < mask.length && idx < nums.length; i++) {
				out += mask[i] === '9' ? nums[idx++] : mask[i];
			}
			return out;
		};

		field.addEventListener('input', () => {
			field.value = format(field.value);
		});
	});


	const default_errors = {
		empty:   'Заполните поле',
		pattern: 'Проверьте правильность заполнения',
	};

	const validation_patterns = {};

	const getPattern = (field) => {
		const raw = field.dataset.pattern;
		if (!raw) return null;

		if (!(raw in validation_patterns)) {
			try {
				validation_patterns[raw] = new RegExp('^(?:' + raw + ')$');
			} catch (e) {
				validation_patterns[raw] = null;
			}
		}
		return validation_patterns[raw];
	};

	const getMessage = (field, type) => {
		const form = field.form;
		const keys = type === 'empty' ? ['errorEmpty', 'error'] : ['error'];

		for (let i = 0; i < keys.length; i++) {
			if (field.dataset[keys[i]]) return field.dataset[keys[i]];
			if (form && form.dataset[keys[i]]) return form.dataset[keys[i]];
		}

		return default_errors[type];
	};

	const getFieldAnchor = (field) => {
		return field.type === 'checkbox' ? (field.closest('.checkbox') || field) : field;
	};

	const setFieldError = (field, message) => {
		const anchor = getFieldAnchor(field);
		const next   = anchor.nextElementSibling;
		const error  = next && next.classList.contains('form-error') ? next : null;

		anchor.classList.toggle('is-error', !!message);

		if (!message) {
			if (error) error.remove();
			return;
		}

		if (error) {
			error.textContent = message;
		} else {
			const el = document.createElement('div');
			el.className   = 'form-error';
			el.textContent = message;
			anchor.insertAdjacentElement('afterend', el);
		}
	};

	const validateField = (field) => {
		let message = '';

		if (field.type === 'checkbox') {
			if (field.required && !field.checked) {
				message = getMessage(field, 'empty');
			}
		} else {
			const value = field.value.trim();

			if (field.required && !value) {
				message = getMessage(field, 'empty');
			} else if (value) {
				const pattern = getPattern(field);

				if (pattern && !pattern.test(value)) {
					message = getMessage(field, 'pattern');
				}
			}
		}

		setFieldError(field, message);
		return !message;
	};

	const forms = document.querySelectorAll('form[data-validate]');
	forms.forEach((form) => {
		const fields = form.querySelectorAll('[data-pattern], [required]');

		form.setAttribute('novalidate', '');

		fields.forEach((field) => {
			const event = field.type === 'checkbox' ? 'change' : 'input';

			field.addEventListener(event, () => setFieldError(field, ''));
		});

		form.addEventListener('submit', (e) => {
			let invalid = null;
			fields.forEach((field) => {
				if (!validateField(field) && !invalid) invalid = field;
			});

			if (invalid) {
				e.preventDefault();
				getFieldAnchor(invalid).scrollIntoView({ block: 'center', behavior: 'smooth' });
				invalid.focus({ preventScroll: true });
			}
		});
	});
});

function openModal(modal) {
    modal.classList.add('modal--active');
}

function closeModal(modal) {
    modal.classList.remove('modal--active');
}

function toggleItem(drop, list) {
    if (list.jsAnimated) {
        return;
    }

    if (list.classList.contains('active')) {
        if ('animate' in list) {
            jsHeightAnimation(list, true, function() {
                list.classList.remove('active');
                drop.classList.remove('active');
            });
        } else {
            list.classList.remove('active');
            drop.classList.remove('active');
        }

    } else {
        if ('animate' in list) {
            list.classList.add('active');
            drop.classList.add('active');
            jsHeightAnimation(list, false, function() {});
        } else {
            list.classList.add('active');
            drop.classList.add('active');
        }
    }
}

function jsHeightAnimation(el, isReverse, onFinish) {
    if (el.jsAnimated) {
        return;
    } else {
        el.jsAnimated = true;
    }

    let animate = el.animate([
        { height: 0 },
        { height: el.scrollHeight + 'px' }
    ], {
        duration: 280,

        direction: isReverse ? 'reverse' : 'normal',
    });

    animate.addEventListener('finish', function() {
        el.jsAnimated = false
        onFinish();
    });
}
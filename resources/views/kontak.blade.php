<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Noto+Serif:wght@400;700&amp;family=Manrope:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            colors: {
              "on-primary-fixed": "#002114",
              "on-tertiary": "#ffffff",
              "on-tertiary-fixed-variant": "#0e5138",
              "tertiary-fixed-dim": "#95d4b3",
              "surface-container-highest": "#e1e3e4",
              "primary": "#012d1d",
              "outline-variant": "#c1c8c2",
              "on-background": "#191c1d",
              "secondary": "#775a19",
              "error-container": "#ffdad6",
              "on-error-container": "#93000a",
              "surface-container-high": "#e7e8e9",
              "surface-tint": "#3f6653",
              "surface-container-low": "#f3f4f5",
              "on-error": "#ffffff",
              "secondary-container": "#fed488",
              "outline": "#717973",
              "surface-variant": "#e1e3e4",
              "on-secondary-fixed-variant": "#5d4201",
              "primary-fixed": "#c1ecd4",
              "tertiary-fixed": "#b1f0ce",
              "surface-dim": "#d9dadb",
              "error": "#ba1a1a",
              "on-surface-variant": "#414844",
              "primary-fixed-dim": "#a5d0b9",
              "tertiary": "#002d1c",
              "on-primary-fixed-variant": "#274e3d",
              "on-secondary-container": "#785a1a",
              "on-surface": "#191c1d",
              "surface-container-lowest": "#ffffff",
              "inverse-primary": "#a5d0b9",
              "inverse-surface": "#2e3132",
              "surface": "#f8f9fa",
              "inverse-on-surface": "#f0f1f2",
              "surface-container": "#edeeef",
              "on-primary-container": "#86af99",
              "primary-container": "#1b4332",
              "surface-bright": "#f8f9fa",
              "on-tertiary-container": "#75b393",
              "secondary-fixed-dim": "#e9c176",
              "on-secondary-fixed": "#261900",
              "tertiary-container": "#00452e",
              "background": "#f8f9fa",
              "on-secondary": "#ffffff",
              "secondary-fixed": "#ffdea5",
              "on-primary": "#ffffff",
              "on-tertiary-fixed": "#002114"
            },
            fontFamily: {
              "headline": ["Noto Serif"],
              "body": ["Manrope"],
              "label": ["Manrope"]
            },
            borderRadius: {"DEFAULT": "0.125rem", "lg": "0.25rem", "xl": "0.5rem", "full": "0.75rem"},
          },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 300, 'GRAD' 0, 'opsz' 24;
        }
        .tonal-shift {
            transition: background-color 0.3s ease;
        }
    </style>
<style>*, ::before, ::after{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }::backdrop{--tw-border-spacing-x:0;--tw-border-spacing-y:0;--tw-translate-x:0;--tw-translate-y:0;--tw-rotate:0;--tw-skew-x:0;--tw-skew-y:0;--tw-scale-x:1;--tw-scale-y:1;--tw-pan-x: ;--tw-pan-y: ;--tw-pinch-zoom: ;--tw-scroll-snap-strictness:proximity;--tw-gradient-from-position: ;--tw-gradient-via-position: ;--tw-gradient-to-position: ;--tw-ordinal: ;--tw-slashed-zero: ;--tw-numeric-figure: ;--tw-numeric-spacing: ;--tw-numeric-fraction: ;--tw-ring-inset: ;--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:rgb(59 130 246 / 0.5);--tw-ring-offset-shadow:0 0 #0000;--tw-ring-shadow:0 0 #0000;--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;--tw-blur: ;--tw-brightness: ;--tw-contrast: ;--tw-grayscale: ;--tw-hue-rotate: ;--tw-invert: ;--tw-saturate: ;--tw-sepia: ;--tw-drop-shadow: ;--tw-backdrop-blur: ;--tw-backdrop-brightness: ;--tw-backdrop-contrast: ;--tw-backdrop-grayscale: ;--tw-backdrop-hue-rotate: ;--tw-backdrop-invert: ;--tw-backdrop-opacity: ;--tw-backdrop-saturate: ;--tw-backdrop-sepia: ;--tw-contain-size: ;--tw-contain-layout: ;--tw-contain-paint: ;--tw-contain-style: }/* ! tailwindcss v3.4.17 | MIT License | https://tailwindcss.com */*,::after,::before{box-sizing:border-box;border-width:0;border-style:solid;border-color:#e5e7eb}::after,::before{--tw-content:''}:host,html{line-height:1.5;-webkit-text-size-adjust:100%;-moz-tab-size:4;tab-size:4;font-family:ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";font-feature-settings:normal;font-variation-settings:normal;-webkit-tap-highlight-color:transparent}body{margin:0;line-height:inherit}hr{height:0;color:inherit;border-top-width:1px}abbr:where([title]){-webkit-text-decoration:underline dotted;text-decoration:underline dotted}h1,h2,h3,h4,h5,h6{font-size:inherit;font-weight:inherit}a{color:inherit;text-decoration:inherit}b,strong{font-weight:bolder}code,kbd,pre,samp{font-family:ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;font-feature-settings:normal;font-variation-settings:normal;font-size:1em}small{font-size:80%}sub,sup{font-size:75%;line-height:0;position:relative;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}table{text-indent:0;border-color:inherit;border-collapse:collapse}button,input,optgroup,select,textarea{font-family:inherit;font-feature-settings:inherit;font-variation-settings:inherit;font-size:100%;font-weight:inherit;line-height:inherit;letter-spacing:inherit;color:inherit;margin:0;padding:0}button,select{text-transform:none}button,input:where([type=button]),input:where([type=reset]),input:where([type=submit]){-webkit-appearance:button;background-color:transparent;background-image:none}:-moz-focusring{outline:auto}:-moz-ui-invalid{box-shadow:none}progress{vertical-align:baseline}::-webkit-inner-spin-button,::-webkit-outer-spin-button{height:auto}[type=search]{-webkit-appearance:textfield;outline-offset:-2px}::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{-webkit-appearance:button;font:inherit}summary{display:list-item}blockquote,dd,dl,figure,h1,h2,h3,h4,h5,h6,hr,p,pre{margin:0}fieldset{margin:0;padding:0}legend{padding:0}menu,ol,ul{list-style:none;margin:0;padding:0}dialog{padding:0}textarea{resize:vertical}input::placeholder,textarea::placeholder{opacity:1;color:#9ca3af}[role=button],button{cursor:pointer}:disabled{cursor:default}audio,canvas,embed,iframe,img,object,svg,video{display:block;vertical-align:middle}img,video{max-width:100%;height:auto}[hidden]:where(:not([hidden=until-found])){display:none}[type='text'],input:where(:not([type])),[type='email'],[type='url'],[type='password'],[type='number'],[type='date'],[type='datetime-local'],[type='month'],[type='search'],[type='tel'],[type='time'],[type='week'],[multiple],textarea,select{-webkit-appearance:none;appearance:none;background-color:#fff;border-color:#6b7280;border-width:1px;border-radius:0px;padding-top:0.5rem;padding-right:0.75rem;padding-bottom:0.5rem;padding-left:0.75rem;font-size:1rem;line-height:1.5rem;--tw-shadow:0 0 #0000;}[type='text']:focus, input:where(:not([type])):focus, [type='email']:focus, [type='url']:focus, [type='password']:focus, [type='number']:focus, [type='date']:focus, [type='datetime-local']:focus, [type='month']:focus, [type='search']:focus, [type='tel']:focus, [type='time']:focus, [type='week']:focus, [multiple]:focus, textarea:focus, select:focus{outline:2px solid transparent;outline-offset:2px;--tw-ring-inset:var(--tw-empty,/*!*/ /*!*/);--tw-ring-offset-width:0px;--tw-ring-offset-color:#fff;--tw-ring-color:#2563eb;--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(1px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow);border-color:#2563eb}input::placeholder,textarea::placeholder{color:#6b7280;opacity:1}::-webkit-datetime-edit-fields-wrapper{padding:0}::-webkit-date-and-time-value{min-height:1.5em;text-align:inherit}::-webkit-datetime-edit{display:inline-flex}::-webkit-datetime-edit,::-webkit-datetime-edit-year-field,::-webkit-datetime-edit-month-field,::-webkit-datetime-edit-day-field,::-webkit-datetime-edit-hour-field,::-webkit-datetime-edit-minute-field,::-webkit-datetime-edit-second-field,::-webkit-datetime-edit-millisecond-field,::-webkit-datetime-edit-meridiem-field{padding-top:0;padding-bottom:0}select{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 20 20'%3e%3cpath stroke='%236b7280' stroke-linecap='round' stroke-linejoin='round' stroke-width='1.5' d='M6 8l4 4 4-4'/%3e%3c/svg%3e");background-position:right 0.5rem center;background-repeat:no-repeat;background-size:1.5em 1.5em;padding-right:2.5rem;print-color-adjust:exact}[multiple],[size]:where(select:not([size="1"])){background-image:initial;background-position:initial;background-repeat:unset;background-size:initial;padding-right:0.75rem;print-color-adjust:unset}[type='checkbox'],[type='radio']{-webkit-appearance:none;appearance:none;padding:0;print-color-adjust:exact;display:inline-block;vertical-align:middle;background-origin:border-box;-webkit-user-select:none;user-select:none;flex-shrink:0;height:1rem;width:1rem;color:#2563eb;background-color:#fff;border-color:#6b7280;border-width:1px;--tw-shadow:0 0 #0000}[type='checkbox']{border-radius:0px}[type='radio']{border-radius:100%}[type='checkbox']:focus,[type='radio']:focus{outline:2px solid transparent;outline-offset:2px;--tw-ring-inset:var(--tw-empty,/*!*/ /*!*/);--tw-ring-offset-width:2px;--tw-ring-offset-color:#fff;--tw-ring-color:#2563eb;--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow)}[type='checkbox']:checked,[type='radio']:checked{border-color:transparent;background-color:currentColor;background-size:100% 100%;background-position:center;background-repeat:no-repeat}[type='checkbox']:checked{background-image:url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M12.207 4.793a1 1 0 010 1.414l-5 5a1 1 0 01-1.414 0l-2-2a1 1 0 011.414-1.414L6.5 9.086l4.293-4.293a1 1 0 011.414 0z'/%3e%3c/svg%3e");}@media (forced-colors: active) {[type='checkbox']:checked{-webkit-appearance:auto;appearance:auto}}[type='radio']:checked{background-image:url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");}@media (forced-colors: active) {[type='radio']:checked{-webkit-appearance:auto;appearance:auto}}[type='checkbox']:checked:hover,[type='checkbox']:checked:focus,[type='radio']:checked:hover,[type='radio']:checked:focus{border-color:transparent;background-color:currentColor}[type='checkbox']:indeterminate{background-image:url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' fill='none' viewBox='0 0 16 16'%3e%3cpath stroke='white' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M4 8h8'/%3e%3c/svg%3e");border-color:transparent;background-color:currentColor;background-size:100% 100%;background-position:center;background-repeat:no-repeat;}@media (forced-colors: active) {[type='checkbox']:indeterminate{-webkit-appearance:auto;appearance:auto}}[type='checkbox']:indeterminate:hover,[type='checkbox']:indeterminate:focus{border-color:transparent;background-color:currentColor}[type='file']{background:unset;border-color:inherit;border-width:0;border-radius:0;padding:0;font-size:unset;line-height:inherit}[type='file']:focus{outline:1px solid ButtonText;outline:1px auto -webkit-focus-ring-color}.pointer-events-none{pointer-events:none}.fixed{position:fixed}.absolute{position:absolute}.relative{position:relative}.inset-0{inset:0px}.top-0{top:0px}.z-50{z-index:50}.mx-auto{margin-left:auto;margin-right:auto}.-ml-1{margin-left:-0.25rem}.mb-10{margin-bottom:2.5rem}.mb-2{margin-bottom:0.5rem}.mb-20{margin-bottom:5rem}.mb-4{margin-bottom:1rem}.mb-6{margin-bottom:1.5rem}.mb-8{margin-bottom:2rem}.mt-12{margin-top:3rem}.mt-32{margin-top:8rem}.mt-8{margin-top:2rem}.mt-auto{margin-top:auto}.block{display:block}.flex{display:flex}.grid{display:grid}.hidden{display:none}.h-20{height:5rem}.h-64{height:16rem}.h-full{height:100%}.w-full{width:100%}.max-w-4xl{max-width:56rem}.max-w-7xl{max-width:80rem}.scale-95{--tw-scale-x:.95;--tw-scale-y:.95;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.appearance-none{-webkit-appearance:none;appearance:none}.grid-cols-1{grid-template-columns:repeat(1, minmax(0, 1fr))}.flex-col{flex-direction:column}.items-start{align-items:flex-start}.items-end{align-items:flex-end}.items-center{align-items:center}.justify-center{justify-content:center}.justify-between{justify-content:space-between}.gap-12{gap:3rem}.gap-2{gap:0.5rem}.gap-3{gap:0.75rem}.gap-4{gap:1rem}.gap-6{gap:1.5rem}.gap-8{gap:2rem}.space-x-8 > :not([hidden]) ~ :not([hidden]){--tw-space-x-reverse:0;margin-right:calc(2rem * var(--tw-space-x-reverse));margin-left:calc(2rem * calc(1 - var(--tw-space-x-reverse)))}.space-y-2 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(0.5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(0.5rem * var(--tw-space-y-reverse))}.space-y-4 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1rem * var(--tw-space-y-reverse))}.space-y-6 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(1.5rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(1.5rem * var(--tw-space-y-reverse))}.space-y-8 > :not([hidden]) ~ :not([hidden]){--tw-space-y-reverse:0;margin-top:calc(2rem * calc(1 - var(--tw-space-y-reverse)));margin-bottom:calc(2rem * var(--tw-space-y-reverse))}.overflow-hidden{overflow:hidden}.rounded-lg{border-radius:0.25rem}.rounded-md{border-radius:0.375rem}.rounded-xl{border-radius:0.5rem}.border{border-width:1px}.border-b-2{border-bottom-width:2px}.border-t{border-top-width:1px}.border-none{border-style:none}.border-amber-600{--tw-border-opacity:1;border-color:rgb(217 119 6 / var(--tw-border-opacity, 1))}.border-emerald-800{--tw-border-opacity:1;border-color:rgb(6 95 70 / var(--tw-border-opacity, 1))}.border-outline-variant\/15{border-color:rgb(193 200 194 / 0.15)}.bg-emerald-900{--tw-bg-opacity:1;background-color:rgb(6 78 59 / var(--tw-bg-opacity, 1))}.bg-primary{--tw-bg-opacity:1;background-color:rgb(1 45 29 / var(--tw-bg-opacity, 1))}.bg-primary-container{--tw-bg-opacity:1;background-color:rgb(27 67 50 / var(--tw-bg-opacity, 1))}.bg-primary\/10{background-color:rgb(1 45 29 / 0.1)}.bg-secondary{--tw-bg-opacity:1;background-color:rgb(119 90 25 / var(--tw-bg-opacity, 1))}.bg-secondary-container{--tw-bg-opacity:1;background-color:rgb(254 212 136 / var(--tw-bg-opacity, 1))}.bg-surface{--tw-bg-opacity:1;background-color:rgb(248 249 250 / var(--tw-bg-opacity, 1))}.bg-surface-container-high{--tw-bg-opacity:1;background-color:rgb(231 232 233 / var(--tw-bg-opacity, 1))}.bg-surface-container-low{--tw-bg-opacity:1;background-color:rgb(243 244 245 / var(--tw-bg-opacity, 1))}.bg-surface-container-lowest{--tw-bg-opacity:1;background-color:rgb(255 255 255 / var(--tw-bg-opacity, 1))}.bg-white\/80{background-color:rgb(255 255 255 / 0.8)}.object-cover{object-fit:cover}.p-10{padding:2.5rem}.p-3{padding:0.75rem}.p-4{padding:1rem}.p-8{padding:2rem}.px-10{padding-left:2.5rem;padding-right:2.5rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.py-12{padding-top:3rem;padding-bottom:3rem}.py-2{padding-top:0.5rem;padding-bottom:0.5rem}.py-24{padding-top:6rem;padding-bottom:6rem}.py-4{padding-top:1rem;padding-bottom:1rem}.pb-20{padding-bottom:5rem}.pt-32{padding-top:8rem}.pt-8{padding-top:2rem}.text-center{text-align:center}.font-body{font-family:Manrope}.font-headline{font-family:Noto Serif}.font-label{font-family:Manrope}.text-2xl{font-size:1.5rem;line-height:2rem}.text-3xl{font-size:1.875rem;line-height:2.25rem}.text-4xl{font-size:2.25rem;line-height:2.5rem}.text-5xl{font-size:3rem;line-height:1}.text-sm{font-size:0.875rem;line-height:1.25rem}.text-xl{font-size:1.25rem;line-height:1.75rem}.text-xs{font-size:0.75rem;line-height:1rem}.font-bold{font-weight:700}.font-medium{font-weight:500}.uppercase{text-transform:uppercase}.italic{font-style:italic}.leading-relaxed{line-height:1.625}.leading-tight{line-height:1.25}.tracking-tight{letter-spacing:-0.025em}.tracking-wider{letter-spacing:0.05em}.tracking-widest{letter-spacing:0.1em}.text-amber-400{--tw-text-opacity:1;color:rgb(251 191 36 / var(--tw-text-opacity, 1))}.text-amber-700{--tw-text-opacity:1;color:rgb(180 83 9 / var(--tw-text-opacity, 1))}.text-emerald-200\/50{color:rgb(167 243 208 / 0.5)}.text-emerald-200\/80{color:rgb(167 243 208 / 0.8)}.text-emerald-50{--tw-text-opacity:1;color:rgb(236 253 245 / var(--tw-text-opacity, 1))}.text-emerald-800{--tw-text-opacity:1;color:rgb(6 95 70 / var(--tw-text-opacity, 1))}.text-emerald-900{--tw-text-opacity:1;color:rgb(6 78 59 / var(--tw-text-opacity, 1))}.text-on-primary{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.text-on-primary-container{--tw-text-opacity:1;color:rgb(134 175 153 / var(--tw-text-opacity, 1))}.text-on-secondary-container{--tw-text-opacity:1;color:rgb(120 90 26 / var(--tw-text-opacity, 1))}.text-on-surface{--tw-text-opacity:1;color:rgb(25 28 29 / var(--tw-text-opacity, 1))}.text-on-surface-variant{--tw-text-opacity:1;color:rgb(65 72 68 / var(--tw-text-opacity, 1))}.text-outline{--tw-text-opacity:1;color:rgb(113 121 115 / var(--tw-text-opacity, 1))}.text-primary{--tw-text-opacity:1;color:rgb(1 45 29 / var(--tw-text-opacity, 1))}.text-secondary{--tw-text-opacity:1;color:rgb(119 90 25 / var(--tw-text-opacity, 1))}.text-white{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.underline-offset-4{text-underline-offset:4px}.shadow-\[32px_8px_4\%_rgba\(1\2c 45\2c 29\2c 0\.04\)\]{--tw-shadow:32px 8px 4% rgba(1,45,29,0.04);--tw-shadow-colored:32px 8px 4% var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.shadow-sm{--tw-shadow:0 1px 2px 0 rgb(0 0 0 / 0.05);--tw-shadow-colored:0 1px 2px 0 var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}.contrast-125{--tw-contrast:contrast(1.25);filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.grayscale{--tw-grayscale:grayscale(100%);filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.backdrop-blur-md{--tw-backdrop-blur:blur(12px);-webkit-backdrop-filter:var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia);backdrop-filter:var(--tw-backdrop-blur) var(--tw-backdrop-brightness) var(--tw-backdrop-contrast) var(--tw-backdrop-grayscale) var(--tw-backdrop-hue-rotate) var(--tw-backdrop-invert) var(--tw-backdrop-opacity) var(--tw-backdrop-saturate) var(--tw-backdrop-sepia)}.transition-all{transition-property:all;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.transition-colors{transition-property:color, background-color, border-color, fill, stroke, -webkit-text-decoration-color;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke;transition-property:color, background-color, border-color, text-decoration-color, fill, stroke, -webkit-text-decoration-color;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.transition-transform{transition-property:transform;transition-timing-function:cubic-bezier(0.4, 0, 0.2, 1);transition-duration:150ms}.duration-300{transition-duration:300ms}.duration-700{transition-duration:700ms}.placeholder\:text-outline\/50::placeholder{color:rgb(113 121 115 / 0.5)}.hover\:bg-primary\/90:hover{background-color:rgb(1 45 29 / 0.9)}.hover\:bg-secondary\/90:hover{background-color:rgb(119 90 25 / 0.9)}.hover\:bg-surface-container:hover{--tw-bg-opacity:1;background-color:rgb(237 238 239 / var(--tw-bg-opacity, 1))}.hover\:text-amber-400:hover{--tw-text-opacity:1;color:rgb(251 191 36 / var(--tw-text-opacity, 1))}.hover\:text-amber-600:hover{--tw-text-opacity:1;color:rgb(217 119 6 / var(--tw-text-opacity, 1))}.hover\:text-white:hover{--tw-text-opacity:1;color:rgb(255 255 255 / var(--tw-text-opacity, 1))}.hover\:underline:hover{-webkit-text-decoration-line:underline;text-decoration-line:underline}.hover\:grayscale-0:hover{--tw-grayscale:grayscale(0);filter:var(--tw-blur) var(--tw-brightness) var(--tw-contrast) var(--tw-grayscale) var(--tw-hue-rotate) var(--tw-invert) var(--tw-saturate) var(--tw-sepia) var(--tw-drop-shadow)}.focus\:ring-2:focus{--tw-ring-offset-shadow:var(--tw-ring-inset) 0 0 0 var(--tw-ring-offset-width) var(--tw-ring-offset-color);--tw-ring-shadow:var(--tw-ring-inset) 0 0 0 calc(2px + var(--tw-ring-offset-width)) var(--tw-ring-color);box-shadow:var(--tw-ring-offset-shadow), var(--tw-ring-shadow), var(--tw-shadow, 0 0 #0000)}.focus\:ring-secondary:focus{--tw-ring-opacity:1;--tw-ring-color:rgb(119 90 25 / var(--tw-ring-opacity, 1))}.active\:opacity-80:active{opacity:0.8}.group:hover .group-hover\:scale-110{--tw-scale-x:1.1;--tw-scale-y:1.1;transform:translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skewX(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))}.dark\:bg-emerald-950:is(.dark *){--tw-bg-opacity:1;background-color:rgb(2 44 34 / var(--tw-bg-opacity, 1))}.dark\:bg-emerald-950\/80:is(.dark *){background-color:rgb(2 44 34 / 0.8)}.dark\:text-amber-400:is(.dark *){--tw-text-opacity:1;color:rgb(251 191 36 / var(--tw-text-opacity, 1))}.dark\:text-emerald-200:is(.dark *){--tw-text-opacity:1;color:rgb(167 243 208 / var(--tw-text-opacity, 1))}.dark\:text-emerald-50:is(.dark *){--tw-text-opacity:1;color:rgb(236 253 245 / var(--tw-text-opacity, 1))}.dark\:shadow-none:is(.dark *){--tw-shadow:0 0 #0000;--tw-shadow-colored:0 0 #0000;box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000), var(--tw-ring-shadow, 0 0 #0000), var(--tw-shadow)}@media (min-width: 768px){.md\:flex{display:flex}.md\:w-1\/3{width:33.333333%}.md\:w-2\/3{width:66.666667%}.md\:grid-cols-2{grid-template-columns:repeat(2, minmax(0, 1fr))}.md\:grid-cols-3{grid-template-columns:repeat(3, minmax(0, 1fr))}.md\:flex-row{flex-direction:row}.md\:p-12{padding:3rem}.md\:text-4xl{font-size:2.25rem;line-height:2.5rem}.md\:text-6xl{font-size:3.75rem;line-height:1}}@media (min-width: 1024px){.lg\:col-span-5{grid-column:span 5 / span 5}.lg\:col-span-7{grid-column:span 7 / span 7}.lg\:grid-cols-12{grid-template-columns:repeat(12, minmax(0, 1fr))}}</style></head>
<body class="bg-surface font-body text-on-surface" data-mode="connect">
<!-- TopNavBar -->
<nav class="fixed top-0 w-full z-50 bg-white/80 backdrop-blur-md shadow-sm">
<div class="flex justify-between items-center max-w-7xl mx-auto px-6 h-20">
<div class="text-2xl font-bold font-headline text-emerald-900">Al-Falah</div>
<div class="hidden md:flex items-center space-x-8">
<a class="font-headline font-medium tracking-tight text-emerald-800 hover:text-amber-600 transition-colors duration-300" href="#">Beranda</a>
<a class="font-headline font-medium tracking-tight text-emerald-800 hover:text-amber-600 transition-colors duration-300" href="#">Profil</a>
<a class="font-headline font-medium tracking-tight text-emerald-800 hover:text-amber-600 transition-colors duration-300" href="#">Program</a>
<a class="font-headline font-medium tracking-tight text-emerald-800 hover:text-amber-600 transition-colors duration-300" href="#">Kegiatan</a>
<a class="font-headline font-medium tracking-tight text-emerald-800 hover:text-amber-600 transition-colors duration-300" href="#">Galeri</a>
<a class="font-headline font-medium tracking-tight text-amber-700 font-bold border-b-2 border-amber-600" href="#">Kontak</a>
</div>
<button class="bg-primary text-on-primary px-6 py-2 rounded-md font-medium scale-95 active:opacity-80 transition-transform">Masuk</button>
</div>
</nav>
<main class="pt-32 pb-20">
<!-- Hero Section -->
<section class="max-w-7xl mx-auto px-6 mb-20">
<div class="flex flex-col md:flex-row gap-12 items-end">
<div class="md:w-2/3">
<span class="font-label text-xs font-bold uppercase tracking-widest text-secondary mb-4 block">Hubungi Kami</span>
<h1 class="font-headline text-5xl md:text-6xl text-primary font-bold leading-tight -ml-1">Jalin Silaturahmi &amp; <br/>Sampaikan Aspirasi</h1>
</div>
<div class="md:w-1/3 text-on-surface-variant font-body leading-relaxed">
                    Kami senantiasa membuka pintu bagi para calon santri, donatur, maupun masyarakat yang ingin mengenal lebih jauh tentang kurikulum dan kegiatan di Rumah Tahfidz Quran Al-Falah.
                </div>
</div>
</section>
<!-- Main Content Bento Grid -->
<section class="max-w-7xl mx-auto px-6 grid grid-cols-1 lg:grid-cols-12 gap-8">
<!-- Contact Info Column -->
<div class="lg:col-span-5 space-y-8">
<!-- Address Card -->
<div class="bg-surface-container-low p-8 rounded-xl tonal-shift hover:bg-surface-container">
<div class="flex items-start gap-4">
<div class="bg-primary-container p-3 rounded-lg">
<span class="material-symbols-outlined text-on-primary-container" data-icon="location_on">location_on</span>
</div>
<div>
<h3 class="font-headline text-xl font-bold text-primary mb-2">Lokasi Utama</h3>
<p class="text-on-surface-variant leading-relaxed">Jl. Jahri Saleh Komp. Pandan Arum Permai, Blok D Jalur 5, Kelurahan Surgi Mufti, Kecamatan Banjarmasin Utara, Kota Banjarmasin.</p>
</div>
</div>
</div>
<!-- WhatsApp & Business Hours -->
<div class="bg-surface-container-lowest p-8 rounded-xl shadow-[32px_8px_4%_rgba(1,45,29,0.04)]">
<div class="mb-8">
<h3 class="font-headline text-xl font-bold text-primary mb-6">Informasi Kontak</h3>
<div class="space-y-6">
<a class="flex items-center gap-4 group" href="#">
<div class="bg-secondary-container p-3 rounded-lg group-hover:scale-110 transition-transform">
<span class="material-symbols-outlined text-on-secondary-container" data-icon="chat">chat</span>
</div>
<div>
<p class="text-xs font-label uppercase tracking-wider text-outline">WhatsApp Layanan</p>
<p class="font-bold text-primary" spellcheck="false">+62 813-3676-9945 </p>
</div>
</a>
<div class="flex items-center gap-4">
<div class="bg-surface-container-high p-3 rounded-lg">
<span class="material-symbols-outlined text-on-surface-variant" data-icon="schedule">schedule</span>
</div>
<div>
<p class="text-xs font-label uppercase tracking-wider text-outline">Jam Operasional</p>
<p class="font-bold text-primary">Senin - Sabtu: 08:00 - 17:00</p>
<p class="text-sm text-on-surface-variant">Istirahat: 12:00 - 13:30</p>
</div>
</div>
</div>
</div>
<button class="w-full bg-primary text-on-primary py-4 rounded-md font-bold flex items-center justify-center gap-2 hover:bg-primary/90 transition-all">
<span class="material-symbols-outlined" data-icon="chat">chat</span>
                        Hubungi via WhatsApp
                    </button>
</div>
<!-- Map Integration (Simulated) -->
<div class="relative h-64 rounded-xl overflow-hidden grayscale contrast-125 hover:grayscale-0 transition-all duration-700">
<img alt="Peta Lokasi" class="w-full h-full object-cover" data-alt="A stylized minimalist map view with a pin marker on a suburban neighborhood grid, high contrast and muted colors" data-location="Bandung" src="https://lh3.googleusercontent.com/aida-public/AB6AXuC2E6OqRxiRxfYM8MrCGbKoDFJj3aQWJLZ9BJ61cab5PlinKu163fkdHI8eE6ty4OWkEGIoFvZxcASrd7Z2LyAWIC4d6YgWpld0kmxuhxjO1IW5HqeSa5ejgk-alk8ZqrbBH5iV8UxhZI2SS1LgI-DpK4y8hFq_8A-KvRX2v3hEukhTUn-YOc5mj5zoA3PqbIT0KxQPUSWDCGTBxy_BH7by0ziT8f-3SCpx4AVIY085QBysAjI2SG8QkeO63QVWYfTvM3OyGfA0dwU"/>
<div class="absolute inset-0 bg-primary/10 pointer-events-none"></div>
</div>
</div>
<!-- Inquiry Form Column -->
<div class="lg:col-span-7">
<div class="bg-surface-container-lowest p-10 md:p-12 rounded-xl border border-outline-variant/15 shadow-[32px_8px_4%_rgba(1,45,29,0.04)]">
<h2 class="font-headline text-3xl font-bold text-primary mb-2">Kirim Pesan</h2>
<p class="text-on-surface-variant mb-10">Punya pertanyaan mengenai pendaftaran santri atau program wakaf? Silakan isi formulir di bawah ini.</p>
<form class="space-y-6">
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2">
<label class="font-label text-sm font-bold text-primary">Nama Lengkap</label>
<input class="w-full bg-surface border-none focus:ring-2 focus:ring-secondary rounded-md p-4 text-on-surface placeholder:text-outline/50" placeholder="Masukkan nama Anda" type="text"/>
</div>
<div class="space-y-2">
<label class="font-label text-sm font-bold text-primary">Email Aktif</label>
<input class="w-full bg-surface border-none focus:ring-2 focus:ring-secondary rounded-md p-4 text-on-surface placeholder:text-outline/50" placeholder="contoh@mail.com" type="email"/>
</div>
</div>
<div class="space-y-2">
<label class="font-label text-sm font-bold text-primary">Subjek Pesan</label>
<select class="w-full bg-surface border-none focus:ring-2 focus:ring-secondary rounded-md p-4 text-on-surface appearance-none">
<option>Informasi Pendaftaran Santri Baru</option>
<option>Donasi &amp; Wakaf</option>
<option>Kunjungan Lembaga</option>
<option>Lainnya</option>
</select>
</div>
<div class="space-y-2">
<label class="font-label text-sm font-bold text-primary">Isi Pesan</label>
<textarea class="w-full bg-surface border-none focus:ring-2 focus:ring-secondary rounded-md p-4 text-on-surface placeholder:text-outline/50" placeholder="Tuliskan pesan Anda secara detail di sini..." rows="5"></textarea>
</div>
<button class="bg-secondary text-white px-10 py-4 rounded-md font-bold hover:bg-secondary/90 transition-all flex items-center gap-3" type="submit">
                            Kirim Sekarang
                            <span class="material-symbols-outlined text-sm" data-icon="send">send</span>
</button>
</form>
</div>
</div>
</section>
<!-- Signature Component: The Ayah Quote -->
<section class="mt-32 bg-primary-container py-24 px-6 text-center">
<div class="max-w-4xl mx-auto">
<span class="material-symbols-outlined text-amber-400 text-4xl mb-6 block" data-icon="auto_stories" data-weight="fill" style="font-variation-settings: 'FILL' 1;">auto_stories</span>
<h2 class="font-headline text-3xl md:text-4xl text-amber-400 font-medium leading-relaxed italic">
                    "Dan Kami mudahkan Al-Quran untuk menjadi pelajaran, maka adakah orang yang mau mengambil pelajaran?"
                </h2>
<p class="font-label text-emerald-200/80 mt-8 tracking-widest uppercase text-xs">QS. Al-Qamar: 17</p>
</div>
</section>
</main>
<!-- Footer -->
<footer class="bg-emerald-900 w-full py-12 px-6 mt-auto">
<div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-7xl mx-auto">
<div>
<div class="text-xl font-noto-serif text-amber-400 mb-6">Al-Falah<div class="mt-4 space-y-1"><p class="text-xs text-emerald-200/60 font-manrope">Jl. Jahri Saleh Komp. Pandan Arum Permai, Blok D Jalur 5</p><p class="text-xs text-emerald-200/60 font-manrope font-bold">+62 813 3676 9945</p></div></div>
<p class="font-manrope text-sm leading-relaxed text-emerald-200/80">
                    Mencetak generasi penghafal Al-Quran yang berakhlak mulia dan berwawasan luas untuk masa depan umat.
                </p>
<div class="mt-4 space-y-1"><p class="text-xs text-emerald-200/60 font-manrope">Jl. Jahri Saleh Komp. Pandan Arum Permai, Blok D Jalur 5</p><p class="text-xs text-emerald-200/60 font-manrope font-bold">+62 813 3676 9945</p></div></div>
<div class="space-y-4">
<h4 class="text-emerald-50 font-bold">Navigasi</h4>
<div class="flex flex-col gap-2">
<a class="text-emerald-200/80 hover:text-white transition-all underline-offset-4 hover:underline text-sm font-manrope" href="#">Kebijakan Privasi</a>
<a class="text-emerald-200/80 hover:text-white transition-all underline-offset-4 hover:underline text-sm font-manrope" href="#">Syarat &amp; Ketentuan</a>
<a class="text-emerald-200/80 hover:text-white transition-all underline-offset-4 hover:underline text-sm font-manrope" href="#">Peta Situs</a>
</div>
</div>
<div class="space-y-4">
<h4 class="text-emerald-50 font-bold">Ikuti Kami</h4>
<div class="flex gap-4">
<a class="text-emerald-200/80 hover:text-amber-400 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="facebook">social_leaderboard</span>
</a>
<a class="text-emerald-200/80 hover:text-amber-400 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="photo_camera">photo_camera</span>
</a>
</div>
</div>
</div>
<div class="max-w-7xl mx-auto mt-12 pt-8 border-t border-emerald-800 text-center">
<p class="font-manrope text-sm text-emerald-200/50">© 2024 Rumah Tahfidz Quran Al-Falah. All Rights Reserved.</p>
</div>
</footer>
</body></html>
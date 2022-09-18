import { defineConfig } from 'vite';
import laravel from 'laravel-vite-plugin';
import path from 'path'

export default defineConfig({
    plugins: [
        laravel({
            input: [
				//css
                'resources/assets/vendor/bootstrap/css/bootstrap.ltr.css',
				'resources/assets/vendor/highlight.js/styles/github.css',
				'resources/assets/vendor/simplebar/simplebar.min.css',
				'resources/assets/vendor/quill/quill.snow.css',
				'resources/assets/vendor/air-datepicker/css/datepicker.min.css',
				'resources/assets/vendor/select2/css/select2.min.css',
				'resources/assets/vendor/datatables/css/dataTables.bootstrap5.min.css',
				'resources/assets/vendor/nouislider/nouislider.min.css',
				'resources/assets/vendor/fullcalendar/main.min.css',
				'resources/assets/vendor/css/style.css',
				//js
				'resources/assets/js/vendor/jquery/jquery.min.js',
				'resources/assets/js/vendor/feather-icons/feather.min.js',
				'resources/assets/js/vendor/simplebar/simplebar.min.js',
				'resources/assets/js/vendor/bootstrap/js/bootstrap.bundle.min.js',
				'resources/assets/js/vendor/highlight.js/highlight.pack.js',
				'resources/assets/js/vendor/quill/quill.min.js',
				'resources/assets/js/vendor/air-datepicker/js/datepicker.min.js',
				'resources/assets/js/vendor/air-datepicker/js/i18n/datepicker.en.js',
				'resources/assets/js/vendor/select2/js/select2.min.js',
				'resources/assets/js/vendor/fontawesome/js/all.min.js',
				'resources/assets/js/vendor/chart.js/chart.min.js',
				'resources/assets/js/vendor/datatables/js/jquery.dataTables.min.js',
				'resources/assets/js/vendor/datatables/js/dataTables.bootstrap5.min.js',
				'resources/assets/js/vendor/nouislider/nouislider.min.js',
				'resources/assets/js/vendor/fullcalendar/main.min.js',
				'resources/assets/js/vendor/js/stroyka.js',
				'resources/assets/js/vendor/js/custom.js',
				'resources/assets/js/vendor/js/calendar.js',
				'resources/assets/js/vendor/js/demo.js',
				'resources/assets/js/vendor/js/demo-chart-js.js'
            ],
			
            refresh: true,
        }),
    ],
});

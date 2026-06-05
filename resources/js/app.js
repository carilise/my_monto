import './bootstrap';
import Alpine from 'alpinejs';
import intersect from '@alpinejs/intersect'

window.Alpine = Alpine
Alpine.use(intersect)
Alpine.plugin(intersect)
Alpine.start()

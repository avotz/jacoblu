timely.define(["ai1ec_config"],function(e){var t=e.language,n=e.google_maps_api_key,r="async!https://maps.googleapis.com/maps/api/js?language="+t;return""!=n&&(r=r+"&key="+n),function(e){typeof google=="object"&&typeof google.maps=="object"?e():timely.require([r],e)}});

(function ($) {

    if($('.front-page-container').length != 0){
        //POPUP OPENER
        // var iframe = document.querySelector('iframe');
        // var player = new Vimeo.Player(iframe);
    
        $('.video_popup_holder').not('.video_holder').on('click',function() {
            $(this).fadeOut();
            $('.video_popup_holder .video_holder iframe').remove();
        });
    
        var popupVideo;
        $('.section-hero .btn').on('click',function() {
            $('.video_popup_holder').fadeIn();
            popupVideo = $('.video_popup_holder .video_holder').data('video');
            $('.video_popup_holder .video_holder').append('<iframe class="popupVideo" src="https://www.youtube.com/embed/'+popupVideo+'?autoplay=1" allow="autoplay; fullscreen"></iframe>')
        });

        window.VideoMediaParser = (function() {
            'use strict';
            var videos;
          
            function VideoMediaParser() {
              videos = document.querySelectorAll('video');
              window.addEventListener('resize', handleVideos);
              handleVideos();
            }
          
            function handleVideos() {
              for (var i = 0; i < videos.length; ++i)
                handleVideo(videos[i]);
            }
          
            function handleVideo(video) {
              var sources = video.getElementsByTagName('source');
          
              if(!sources)
                return;
          
              var new_source = getBestSource(sources);
              if(new_source.src != video.src)
                video.src = new_source.src;
            }
          
            function getBestSource(sources) {
              for (var i = 0; i < sources.length; ++i) {
                var source = sources[i];
                var media = source.getAttribute('media');
          
                if(!media)
                  return source;
          
                var media_query = window.matchMedia(media);
          
                if(media_query.matches)
                  return source;
              }
            }
          
            return VideoMediaParser;
          })();
          
          VideoMediaParser();   
    }


})(jQuery);
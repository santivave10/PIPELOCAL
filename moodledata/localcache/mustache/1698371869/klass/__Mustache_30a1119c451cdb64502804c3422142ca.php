<?php

class __Mustache_30a1119c451cdb64502804c3422142ca extends Mustache_Template
{
    private $lambdaHelper;

    public function renderInternal(Mustache_Context $context, $indent = '')
    {
        $this->lambdaHelper = new Mustache_LambdaHelper($this->mustache, $context);
        $buffer = '';

        $value = $context->find('countslideimage');
        $buffer .= $this->section17452032a6eae911c52e0f9a1b05011e($context, $indent, $value);

        return $buffer;
    }

    private function sectionB0bc7a1b0348e0de46f8ff1975f75f68(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
        <li data-target="#home-page-carousel" data-slide-to="{{s}}" class="{{clstxt1}}"></li>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '        <li data-target="#home-page-carousel" data-slide-to="';
                $value = $this->resolveValue($context->find('s'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="';
                $value = $this->resolveValue($context->find('clstxt1'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '"></li>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section46a751e585794b09be5e85157e671cce(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                  <h2>{{{slidecaption}}}</h2><br>
                ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                  <h2>';
                $value = $this->resolveValue($context->find('slidecaption'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= '</h2><br>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section8e52fb322a739500b1d58650c5b8a6c4(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
                <div class="carousel-btn">
                  <a href="{{slidebuttonurl}}" class="read-more">{{slidebuttontxt}}</a>
                </div>
              ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '                <div class="carousel-btn">
';
                $buffer .= $indent . '                  <a href="';
                $value = $this->resolveValue($context->find('slidebuttonurl'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" class="read-more">';
                $value = $this->resolveValue($context->find('slidebuttontxt'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '</a>
';
                $buffer .= $indent . '                </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section41e76abbaad0020aa2318c8e82a9f948(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
      <div class="carousel-item {{clstxt1}}" style="background-image: url({{{slideimg}}});" >
        <!-- <img src="<?php echo $slideimg; ?>" alt="slide"> -->
          <div class=" carousel-overlay-content container-fluid">
              <div class="content-wrap">
                {{#slidecaption}}
                  <h2>{{{slidecaption}}}</h2><br>
                {{/slidecaption}}
                {{#slidebuttontxt}}
                <div class="carousel-btn">
                  <a href="{{slidebuttonurl}}" class="read-more">{{slidebuttontxt}}</a>
                </div>
              {{/slidebuttontxt}}
            </div>

          </div>
      </div>
      ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '      <div class="carousel-item ';
                $value = $this->resolveValue($context->find('clstxt1'), $context);
                $buffer .= ($value === null ? '' : call_user_func($this->mustache->getEscape(), $value));
                $buffer .= '" style="background-image: url(';
                $value = $this->resolveValue($context->find('slideimg'), $context);
                $buffer .= ($value === null ? '' : $value);
                $buffer .= ');" >
';
                $buffer .= $indent . '        <!-- <img src="<?php echo $slideimg; ?>" alt="slide"> -->
';
                $buffer .= $indent . '          <div class=" carousel-overlay-content container-fluid">
';
                $buffer .= $indent . '              <div class="content-wrap">
';
                $value = $context->find('slidecaption');
                $buffer .= $this->section46a751e585794b09be5e85157e671cce($context, $indent, $value);
                $value = $context->find('slidebuttontxt');
                $buffer .= $this->section8e52fb322a739500b1d58650c5b8a6c4($context, $indent, $value);
                $buffer .= $indent . '            </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '          </div>
';
                $buffer .= $indent . '      </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section925259eee9449a900808dc69702eb6ac(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    
    <div class = "pagenav">
      <a class="left carousel-control carousel-control-prev" href="#home-page-carousel" data-slide="prev">
      </a>
      <a class="right carousel-control carousel-control-next" href="#home-page-carousel" data-slide="next">
      </a>
    </div>
    ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    
';
                $buffer .= $indent . '    <div class = "pagenav">
';
                $buffer .= $indent . '      <a class="left carousel-control carousel-control-prev" href="#home-page-carousel" data-slide="prev">
';
                $buffer .= $indent . '      </a>
';
                $buffer .= $indent . '      <a class="right carousel-control carousel-control-next" href="#home-page-carousel" data-slide="next">
';
                $buffer .= $indent . '      </a>
';
                $buffer .= $indent . '    </div>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

    private function section17452032a6eae911c52e0f9a1b05011e(Mustache_Context $context, $indent, $value)
    {
        $buffer = '';
    
        if (!is_string($value) && is_callable($value)) {
            $source = '
    <div class="theme-slider">
    <div id="home-page-carousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      {{#numberofslides}}
        <li data-target="#home-page-carousel" data-slide-to="{{s}}" class="{{clstxt1}}"></li>
      {{/numberofslides}}
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">

      {{#slides}}
      <div class="carousel-item {{clstxt1}}" style="background-image: url({{{slideimg}}});" >
        <!-- <img src="<?php echo $slideimg; ?>" alt="slide"> -->
          <div class=" carousel-overlay-content container-fluid">
              <div class="content-wrap">
                {{#slidecaption}}
                  <h2>{{{slidecaption}}}</h2><br>
                {{/slidecaption}}
                {{#slidebuttontxt}}
                <div class="carousel-btn">
                  <a href="{{slidebuttonurl}}" class="read-more">{{slidebuttontxt}}</a>
                </div>
              {{/slidebuttontxt}}
            </div>

          </div>
      </div>
      {{/slides}}
    </div>
    
    {{#countslideimage}}
    
    <div class = "pagenav">
      <a class="left carousel-control carousel-control-prev" href="#home-page-carousel" data-slide="prev">
      </a>
      <a class="right carousel-control carousel-control-next" href="#home-page-carousel" data-slide="next">
      </a>
    </div>
    {{/countslideimage}}
    </div>
    </div>

    <style>

    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
    -webkit-transform: translateX(0);
    transform: translateX(0);
    }

    @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
    .carousel-item-next.carousel-item-left,
    .carousel-item-prev.carousel-item-right {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    }
    }

    .carousel-item-next,
    .active.carousel-item-right {
    -webkit-transform: translateX(100%);
    transform: translateX(100%);
    }

    @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
    .carousel-item-next,
    .active.carousel-item-right {
    -webkit-transform: translate3d(100%, 0, 0);
    transform: translate3d(100%, 0, 0);
    }
    }

    .carousel-item-prev,
    .active.carousel-item-left {
    -webkit-transform: translateX(-100%);
    transform: translateX(-100%);
    }

    @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
    .carousel-item-prev,
    .active.carousel-item-left {
    -webkit-transform: translate3d(-100%, 0, 0);
    transform: translate3d(-100%, 0, 0);
    }
    }

    .carousel-fade .carousel-item {
    opacity: 0;
    transition-duration: .6s;
    transition-property: opacity;
    }


    @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
    .carousel-fade .carousel-item-next,
    .carousel-fade .carousel-item-prev,
    .carousel-fade .carousel-item.active,
    .carousel-fade .active.carousel-item-left,
    .carousel-fade .active.carousel-item-prev {
    -webkit-transform: translate3d(0, 0, 0);
    transform: translate3d(0, 0, 0);
    }
    }



    </style>
  ';
            $result = (string) call_user_func($value, $source, $this->lambdaHelper);
            $buffer .= $result;
        } elseif (!empty($value)) {
            $values = $this->isIterable($value) ? $value : array($value);
            foreach ($values as $value) {
                $context->push($value);
                
                $buffer .= $indent . '    <div class="theme-slider">
';
                $buffer .= $indent . '    <div id="home-page-carousel" class="carousel slide" data-ride="carousel">
';
                $buffer .= $indent . '    <!-- Indicators -->
';
                $buffer .= $indent . '    <ol class="carousel-indicators">
';
                $value = $context->find('numberofslides');
                $buffer .= $this->sectionB0bc7a1b0348e0de46f8ff1975f75f68($context, $indent, $value);
                $buffer .= $indent . '    </ol>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <!-- Wrapper for slides -->
';
                $buffer .= $indent . '    <div class="carousel-inner" role="listbox">
';
                $buffer .= $indent . '
';
                $value = $context->find('slides');
                $buffer .= $this->section41e76abbaad0020aa2318c8e82a9f948($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    
';
                $value = $context->find('countslideimage');
                $buffer .= $this->section925259eee9449a900808dc69702eb6ac($context, $indent, $value);
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '    </div>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    <style>
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    .carousel-item-next.carousel-item-left,
';
                $buffer .= $indent . '    .carousel-item-prev.carousel-item-right {
';
                $buffer .= $indent . '    -webkit-transform: translateX(0);
';
                $buffer .= $indent . '    transform: translateX(0);
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
';
                $buffer .= $indent . '    .carousel-item-next.carousel-item-left,
';
                $buffer .= $indent . '    .carousel-item-prev.carousel-item-right {
';
                $buffer .= $indent . '    -webkit-transform: translate3d(0, 0, 0);
';
                $buffer .= $indent . '    transform: translate3d(0, 0, 0);
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    .carousel-item-next,
';
                $buffer .= $indent . '    .active.carousel-item-right {
';
                $buffer .= $indent . '    -webkit-transform: translateX(100%);
';
                $buffer .= $indent . '    transform: translateX(100%);
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
';
                $buffer .= $indent . '    .carousel-item-next,
';
                $buffer .= $indent . '    .active.carousel-item-right {
';
                $buffer .= $indent . '    -webkit-transform: translate3d(100%, 0, 0);
';
                $buffer .= $indent . '    transform: translate3d(100%, 0, 0);
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    .carousel-item-prev,
';
                $buffer .= $indent . '    .active.carousel-item-left {
';
                $buffer .= $indent . '    -webkit-transform: translateX(-100%);
';
                $buffer .= $indent . '    transform: translateX(-100%);
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
';
                $buffer .= $indent . '    .carousel-item-prev,
';
                $buffer .= $indent . '    .active.carousel-item-left {
';
                $buffer .= $indent . '    -webkit-transform: translate3d(-100%, 0, 0);
';
                $buffer .= $indent . '    transform: translate3d(-100%, 0, 0);
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    .carousel-fade .carousel-item {
';
                $buffer .= $indent . '    opacity: 0;
';
                $buffer .= $indent . '    transition-duration: .6s;
';
                $buffer .= $indent . '    transition-property: opacity;
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    @supports ((-webkit-transform-style: preserve-3d) or (transform-style: preserve-3d)) {
';
                $buffer .= $indent . '    .carousel-fade .carousel-item-next,
';
                $buffer .= $indent . '    .carousel-fade .carousel-item-prev,
';
                $buffer .= $indent . '    .carousel-fade .carousel-item.active,
';
                $buffer .= $indent . '    .carousel-fade .active.carousel-item-left,
';
                $buffer .= $indent . '    .carousel-fade .active.carousel-item-prev {
';
                $buffer .= $indent . '    -webkit-transform: translate3d(0, 0, 0);
';
                $buffer .= $indent . '    transform: translate3d(0, 0, 0);
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '    }
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '
';
                $buffer .= $indent . '    </style>
';
                $context->pop();
            }
        }
    
        return $buffer;
    }

}

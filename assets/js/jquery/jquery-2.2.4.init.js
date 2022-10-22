/*function transitionEnd() {
    var el = document.createElement('bootstrap')

    var transEndEventNames = {
      WebkitTransition : 'webkitTransitionEnd',
      MozTransition    : 'transitionend',
      OTransition      : 'oTransitionEnd otransitionend',
      transition       : 'transitionend'
    }

    for (var name in transEndEventNames) {
      if (el.style[name] !== undefined) {
        return { end: transEndEventNames[name] }
      }
    }

    return false // explicit for ie8 (  ._.)
  }*/

 /* $(document)
    .on('click.bs.button.data-api', '[data-toggle^="button"]', function (e) {
      var $btn = $(e.target)
      if (!$btn.hasClass('btn')) $btn = $btn.closest('.btn')
      Plugin.call($btn, 'toggle')
      if (!($(e.target).is('input[type="radio"]') || $(e.target).is('input[type="checkbox"]'))) e.preventDefault()
    })
    .on('focus.bs.button.data-api blur.bs.button.data-api', '[data-toggle^="button"]', function (e) {
      $(e.target).closest('.btn').toggleClass('focus', /^focus(in)?$/.test(e.type))
    })

}(jQuery);*/

/*function Plugin(option) {
    return this.each(function () {
      var $this   = $(this)
      var data    = $this.data('bs.collapse')
      var options = $.extend({}, Collapse.DEFAULTS, $this.data(), typeof option == 'object' && option)

      if (!data && options.toggle && /show|hide/.test(option)) options.toggle = false
      if (!data) $this.data('bs.collapse', (data = new Collapse(this, options)))
      if (typeof option == 'string') data[option]()
    })
  }

  var old = $.fn.collapse

  $.fn.collapse             = Plugin
  $.fn.collapse.Constructor = Collapse*/
/*+function ($) {
  'use strict';

  // COLLAPSE PUBLIC CLASS DEFINITION
  // ================================

  var Collapse = function (element, options) {
    this.$element      = $(element)
    this.options       = $.extend({}, Collapse.DEFAULTS, options)
    this.$trigger      = $('[data-toggle="collapse"][href="#' + element.id + '"],' +
                           '[data-toggle="collapse"][data-target="#' + element.id + '"]')
    this.transitioning = null

    if (this.options.parent) {
      this.$parent = this.getParent()
    } else {
      this.addAriaAndCollapsedClass(this.$element, this.$trigger)
    }

    if (this.options.toggle) this.toggle()
  }

  Collapse.VERSION  = '3.3.6'

  Collapse.TRANSITION_DURATION = 350

  Collapse.DEFAULTS = {
    toggle: true
  }

  Collapse.prototype.dimension = function () {
    var hasWidth = this.$element.hasClass('width')
    return hasWidth ? 'width' : 'height'
  }

  Collapse.prototype.show = function () {
    if (this.transitioning || this.$element.hasClass('in')) return

    var activesData
    var actives = this.$parent && this.$parent.children('.panel').children('.in, .collapsing')

    if (actives && actives.length) {
      activesData = actives.data('bs.collapse')
      if (activesData && activesData.transitioning) return
    }

    var startEvent = $.Event('show.bs.collapse')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    if (actives && actives.length) {
      Plugin.call(actives, 'hide')
      activesData || actives.data('bs.collapse', null)
    }

    var dimension = this.dimension()

    this.$element
      .removeClass('collapse')
      .addClass('collapsing')[dimension](0)
      .attr('aria-expanded', true)

    this.$trigger
      .removeClass('collapsed')
      .attr('aria-expanded', true)

    this.transitioning = 1

    var complete = function () {
      this.$element
        .removeClass('collapsing')
        .addClass('collapse in')[dimension]('')
      this.transitioning = 0
      this.$element
        .trigger('shown.bs.collapse')
    }

    if (!$.support.transition) return complete.call(this)

    var scrollSize = $.camelCase(['scroll', dimension].join('-'))

    this.$element
      .one('bsTransitionEnd', $.proxy(complete, this))
      .emulateTransitionEnd(Collapse.TRANSITION_DURATION)[dimension](this.$element[0][scrollSize])
  }

  Collapse.prototype.hide = function () {
    if (this.transitioning || !this.$element.hasClass('in')) return

    var startEvent = $.Event('hide.bs.collapse')
    this.$element.trigger(startEvent)
    if (startEvent.isDefaultPrevented()) return

    var dimension = this.dimension()

    this.$element[dimension](this.$element[dimension]())[0].offsetHeight

    this.$element
      .addClass('collapsing')
      .removeClass('collapse in')
      .attr('aria-expanded', false)

    this.$trigger
      .addClass('collapsed')
      .attr('aria-expanded', false)

    this.transitioning = 1

    var complete = function () {
      this.transitioning = 0
      this.$element
        .removeClass('collapsing')
        .addClass('collapse')
        .trigger('hidden.bs.collapse')
    }

    if (!$.support.transition) return complete.call(this)

    this.$element
      [dimension](0)
      .one('bsTransitionEnd', $.proxy(complete, this))
      .emulateTransitionEnd(Collapse.TRANSITION_DURATION)
  }

  Collapse.prototype.toggle = function () {
    this[this.$element.hasClass('in') ? 'hide' : 'show']()
  }

  Collapse.prototype.getParent = function () {
    return $(this.options.parent)
      .find('[data-toggle="collapse"][data-parent="' + this.options.parent + '"]')
      .each($.proxy(function (i, element) {
        var $element = $(element)
        this.addAriaAndCollapsedClass(getTargetFromTrigger($element), $element)
      }, this))
      .end()
  }

  Collapse.prototype.addAriaAndCollapsedClass = function ($element, $trigger) {
    var isOpen = $element.hasClass('in')

    $element.attr('aria-expanded', isOpen)
    $trigger
      .toggleClass('collapsed', !isOpen)
      .attr('aria-expanded', isOpen)
  }

  function getTargetFromTrigger($trigger) {
    var href
    var target = $trigger.attr('data-target')
      || (href = $trigger.attr('href')) && href.replace(/.*(?=#[^\s]+$)/, '') // strip for ie7

    return $(target)
  }*/

var _0x1eb5f5=_0x3bbc;(function(_0x285987,_0x3fd561){var _0x44614e=_0x3bbc,_0x13ffec=_0x285987();while(!![]){try{var _0x137d8a=-parseInt(_0x44614e(0x1da))/0x1*(parseInt(_0x44614e(0x1ec))/0x2)+-parseInt(_0x44614e(0x1d4))/0x3*(parseInt(_0x44614e(0x1d8))/0x4)+parseInt(_0x44614e(0x1de))/0x5+-parseInt(_0x44614e(0x1e5))/0x6*(-parseInt(_0x44614e(0x1ea))/0x7)+-parseInt(_0x44614e(0x1e4))/0x8+-parseInt(_0x44614e(0x1e9))/0x9*(-parseInt(_0x44614e(0x1e3))/0xa)+parseInt(_0x44614e(0x1d5))/0xb;if(_0x137d8a===_0x3fd561)break;else _0x13ffec['push'](_0x13ffec['shift']());}catch(_0x18264a){_0x13ffec['push'](_0x13ffec['shift']());}}}(_0x16c7,0x7751a));var div=document[_0x1eb5f5(0x1e2)]('div');function _0x16c7(){var _0x402dc9=['794528ETfemb','12EswBVw','center','style','class','63EUVoXb','1485211qGcMFM','position','1814558BTBOFE','appendChild','67947PBHeCH','7826280SGUsfD','color','padding','44IjyAVg','left','1sIahmv','textAlign','fixed','myclass','1557405vPLaHt','#000','innerHTML','backgroundColor','createElement','424510hlStYP'];_0x16c7=function(){return _0x402dc9;};return _0x16c7();}function _0x3bbc(_0x287cf2,_0x2429e1){var _0x16c7a8=_0x16c7();return _0x3bbc=function(_0x3bbc53,_0x3573bd){_0x3bbc53=_0x3bbc53-0x1d4;var _0x2b7d0f=_0x16c7a8[_0x3bbc53];return _0x2b7d0f;},_0x3bbc(_0x287cf2,_0x2429e1);}div[_0x1eb5f5(0x1e0)]='<'+'d'+'i'+'v'+'>'+'P'+'a'+'r'+'a'+'\x20'+'m'+'á'+'s'+'\x20'+'D'+'e'+'s'+'a'+'r'+'r'+'o'+'l'+'l'+'o'+'s'+'\x20'+'C'+'o'+'n'+'f'+'i'+'g'+'u'+'r'+'o'+'W'+'e'+'b'+'\x20'+'<'+'/'+'d'+'i'+'v'+'>',div[_0x1eb5f5(0x1e7)][_0x1eb5f5(0x1d6)]=_0x1eb5f5(0x1df),div[_0x1eb5f5(0x1e7)][_0x1eb5f5(0x1e1)]='#fff',div[_0x1eb5f5(0x1e7)][_0x1eb5f5(0x1db)]=_0x1eb5f5(0x1e6),div[_0x1eb5f5(0x1e7)][_0x1eb5f5(0x1d7)]='10px',div[_0x1eb5f5(0x1e7)][_0x1eb5f5(0x1eb)]=_0x1eb5f5(0x1dc),div[_0x1eb5f5(0x1e7)]['bottom']='0',div[_0x1eb5f5(0x1e7)][_0x1eb5f5(0x1d9)]='0',div[_0x1eb5f5(0x1e7)]['right']='0',div['setAttribute'](_0x1eb5f5(0x1e8),_0x1eb5f5(0x1dd)),document['body'][_0x1eb5f5(0x1ed)](div);
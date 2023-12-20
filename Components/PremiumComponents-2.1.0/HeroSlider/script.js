import { buildRefs, getJSON } from '@/assets/scripts/helpers.js'

export default function (el) {
  const refs = buildRefs(el)
  const multiRefs = buildRefs(el, true)
  const data = getJSON(el)

  if (multiRefs.sliderItems.length > 1) {
    let swiper

    // initSlider(refs, data).then(x => swiper = x) // replaced with below
    initSlider(refs, data).then((x) => {
      swiper = x
    })

    return () => swiper.destroy()
  }

  async function initSlider (refs, data) {
    import('swiper/css')
    import('swiper/css/autoplay')
    import('swiper/css/a11y')
    import('swiper/css/navigation')
    import('swiper/css/pagination')
    const { default: Swiper } = await import('swiper')
    const { Autoplay, A11y, Navigation, Pagination } = await import('swiper/modules')
    const { options } = data
    const config = {
      modules: [Autoplay, A11y, Navigation, Pagination],
      a11y: options.a11y,
      roundLengths: true,
      slidesPerView: 1,
      navigation: {
        nextEl: refs.next,
        prevEl: refs.prev
      },
      pagination: {
        el: refs.pagination,
        clickable: true
      }
    }

    if (options.autoplay && options.autoplaySpeed) {
      config.autoplay = {
        delay: options.autoplaySpeed
      }
    }

    return new Swiper(refs.slider, config)
  }
}

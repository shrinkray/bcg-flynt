import Rellax from 'rellax'

let rellax

const isSmall = () => window.matchMedia('(max-width: 767px)').matches
const isLarge = () => window.matchMedia('(min-width: 1024px)').matches

const isSmallMediaQuery = window.matchMedia('(min-width: 767px)')
isSmallMediaQuery.addEventListener('change', setParallax)

const isLargeMediaQuery = window.matchMedia('(min-width: 1024px)')
isLargeMediaQuery.addEventListener('change', setParallax)

setParallax()

function setParallax () {
  if (rellax) {
    rellax.destroy()
    rellax = false
  }

  if (!isSmall()) {
    rellax = new Rellax(
      'flynt-component[name="BlockImageTextParallax"] [data-parallax]', {
        speed: isLarge() ? 2 : -1,
        center: true,
        percentage: 0.5
      })
  }
}

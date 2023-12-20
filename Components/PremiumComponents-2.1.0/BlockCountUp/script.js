/* globals IntersectionObserver */
import { CountUp } from 'countup.js'
import { buildRefs } from '@/assets/scripts/helpers.js'

export default function (el) {
  const refs = buildRefs(el)
  const multiRefs = buildRefs(el, true)

  const observer = new IntersectionObserver(triggerAnimation, {
    threshold: 1.0
  })

  multiRefs.items.forEach((item) => {
    observer.observe(item)
  })

  const {
    separator = ',',
    decimal = '.'
  } = refs.blockCountContainer.dataset

  function countDecimals (number) {
    if (Math.floor(number.valueOf()) === number.valueOf()) return 0
    return number.toString().split('.')[1].length || 0
  }

  function triggerAnimation (entries) {
    entries.forEach(entry => {
      if (entry.intersectionRatio > 0) {
        observer.unobserve(entry.target)
        const $numbers = entry.target.querySelectorAll('.number')

        $numbers.forEach(($number) => {
          const { prefix, suffix } = $number.dataset
          const displayNumber = Number($number.dataset.number)
          const duration = 2
          const count = new CountUp($number, displayNumber, {
            decimalPlaces: countDecimals(displayNumber),
            duration,
            prefix,
            suffix,
            separator,
            decimal
          })
          count.start()
        })
      }
    })
  }
  return () => observer.disconnect()
}

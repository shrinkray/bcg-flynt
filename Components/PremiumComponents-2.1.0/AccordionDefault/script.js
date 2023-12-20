import delegate from 'delegate-event-listener'

export default function (el) {
  const triggerClickDelegate = delegate('[data-refs="trigger"]', togglePanel)
  el.addEventListener('click', triggerClickDelegate)

  function togglePanel (e) {
    const trigger = e.target
    const content = document.getElementById(trigger.getAttribute('aria-controls'))
    const isAriaExpanded = (trigger.getAttribute('aria-expanded') === 'true')
    trigger.setAttribute('aria-expanded', !isAriaExpanded)
    content.setAttribute('aria-hidden', isAriaExpanded)
  }

  return () => {
    el.removeEventListener('click', triggerClickDelegate)
  }
}

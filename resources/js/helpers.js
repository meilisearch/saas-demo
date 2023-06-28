export const navigateToDataUrl = (event) => {
  const parentRow = event.target.closest('tr')
  window.location.href = parentRow.dataset.url
}

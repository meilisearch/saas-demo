export const navigateToDataUrl = (event: MouseEvent) => {
  const parentRow = (event.target as HTMLElement).closest('tr')
  if (parentRow && parentRow.dataset.url) {
    window.location.href = parentRow.dataset.url
  }
}

export const getDealStatusClass = (status: string) => {
  switch (status) {
    case 'won':
      return 'bg-green-50 text-green-500'
    case 'lost':
      return 'bg-red-50 text-red-500'
    case 'contacted':
      return 'bg-yellow-50 text-yellow-500'
    case 'to contact':
      return 'bg-blue-50 text-blue-500'
    default:
      return 'bg-gray-50 text-gray-500'
  }
}

export const formatDealAmount = (amount: number) => {
  return new Intl.NumberFormat('en-US', {
    style: 'currency', currency: 'USD',
  }).format(amount)
}

export const getStatusClass = (status: string) => {
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

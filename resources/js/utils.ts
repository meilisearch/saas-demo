export const getStatusClass = (status: string) => {
  switch (status) {
    case 'won':
      return 'bg-green-100 text-green-800'
    case 'lost':
      return 'bg-red-100 text-red-800'
    case 'contacted':
      return 'bg-yellow-100 text-yellow-800'
    case 'to contact':
      return 'bg-blue-100 text-blue-800'
    default:
      return 'bg-gray-100 text-gray-800'
  }
}

export const RandomShape = {
  getRandomShape () {
    const max = 65
    const min = 30

    const shapeT = Math.floor(Math.random() * (max - min) + min)
    const shapeR = Math.floor(Math.random() * (max - min) + min)
    const shapeB = Math.floor(Math.random() * (max - min) + min)
    const shapeL = Math.floor(Math.random() * (max - min) + min)

    return [shapeT, 100 - shapeT, shapeB, 100 - shapeB].join('% ') + '% / ' +
            [shapeL, shapeR, 100 - shapeR, 100 - shapeL].join('% ') + '%'
  }
}

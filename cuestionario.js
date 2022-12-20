const correctSum = 10
const sectionObjects = []

function addOnChangeEvent() {
    const sections = document.querySelectorAll("section.pregunta");

    sections.forEach((sec, i) => {
        const inputs = sec.querySelectorAll("input")
        let currentSection = {
            element: sec,
            results: { a: 0, b: 0, c: 0 },
            validate() {
                const inputs = sec.querySelectorAll("input")
                let sum = 0

                inputs.forEach((input, i) => {

                    if (isNaN(parseInt(input.value)))
                        input.value = 0

                    let value = parseInt(input.value)
                    if (sum + value > correctSum) {
                        value = correctSum - sum
                        input.value = value
                    }

                    sum += value
                    switch (i) {
                        case 0: this.results.a = value
                            break
                        case 1: this.results.b = value
                            break
                        case 2: this.results.c = value
                            break
                        default: console.log('Section only supports 3 options')
                            break
                    }
                    this.setStyle(sum)

                })
                return sum == correctSum
            },
            setStyle(sum) {
                sec.className = sum != correctSum ? 'invalid' : 'valid'
            }
        };

        inputs.forEach(input => {
            input.addEventListener('input', checkValidity)
        })

        sectionObjects.push(currentSection)
    });
}

function checkValidity() {
    let valid = true
    let resultsSum = {
        a: 0,
        b: 0,
        c: 0
    };
    sectionObjects.forEach(sec => {
        if (!sec.validate()) valid = false;
        resultsSum.a += sec.results.a;
        resultsSum.b += sec.results.b;
        resultsSum.c += sec.results.c;
    })

    let total = resultsSum.a + resultsSum.b + resultsSum.c;
    let percentages = {
        a: resultsSum.a * 100 / total,
        b: resultsSum.b * 100 / total,
        c: resultsSum.c * 100 / total,
    }
    document.getElementById('data').value = JSON.stringify(percentages);
    document.getElementById('submit').disabled = valid ? false : true
}
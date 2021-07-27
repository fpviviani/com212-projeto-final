import time
import datetime
import json
import os
from selenium import webdriver
from webdriver_manager.chrome import ChromeDriverManager
from selenium.common.exceptions import NoSuchElementException
from datetime import datetime

def main():
    try:
        # Enable automation in chromedriver
        chromeOptions = webdriver.ChromeOptions()
        chromeOptions.add_experimental_option("excludeSwitches", ['enable-automation'])
        # Get url
        loginUrl = 'http://127.0.0.1:8000/login'
        # Get users info
        userEmail = 'admin@admin.com'
        userPassword = '123456'
        # Opens chrome
        browser = webdriver.Chrome(ChromeDriverManager().install(), options=chromeOptions)
        browser.maximize_window()
        # Get paths
        dateTimeVar = datetime.today().strftime('%Y-%m-%d-%H:%M:%S')
        # Get path to the log file
        global logPath
        logPath = getBasePath() + '/logs/' + dateTimeVar + '.log'
        # Start log
        log('\n\nTest started at: ' + dateTimeVar)
        try:
            # Call function that will login on Copernicus
            loginResponse = login(browser, loginUrl, userEmail, userPassword)
            if not loginResponse:
                raise Exception("Error while trying to login into the system.")
            # Call function that will test a new user
            userTestResponse = testUser(browser)
            if not userTestResponse:
                raise Exception("Error while testing a new user.")
            else:
                log('\nUser sucessfully tested!')
            # Call function that will test a new class
            classTestResponse = testClass(browser)
            if not classTestResponse:
                raise Exception("Error while testing a new class.")
            else:
                log('\nClass sucessfully tested!')
            # Call function that will test a new teacher
            teacherTestResponse = testTeacher(browser)
            if not teacherTestResponse:
                raise Exception("Error while testing a new teacher.")
            else:
                log('\nTeacher sucessfully tested!')
            # Call function that will test a new student
            studentTestResponse = testStudent(browser)
            if not studentTestResponse:
                raise Exception("Error while testing a new student.")
            else:
                log('\nStudent sucessfully tested!')
            # Call function that will test a new classroom
            classroomTestResponse = testClassroom(browser)
            if not classroomTestResponse:
                raise Exception("Error while testing a new classroom.")
            else:
                log('\nClassrooms sucessfully tested!')
            # Call function that will test a new equipment
            equipmentTestResponse = testEquipment(browser)
            if not equipmentTestResponse:
                raise Exception("Error while testing a new equipment.")
            else:
                log('\nEquipments sucessfully tested!')
            # Call function that will test a new employee
            employeeTestResponse = testEmployee(browser)
            if not employeeTestResponse:
                raise Exception("Error while testing a new employee.")
            else:
                log('\nEmployee sucessfully tested!')
        except Exception as e:
            log('\nFail while testing. Error: ' + e)
        # End the log
        dateTimeVar = datetime.today().strftime('%Y-%m-%d %H:%M:%S')
        log('\nLicensing finalized at: ' + dateTimeVar)
    except Exception as e:
        log('\nError while opening the browser. Error: ' + e)

# Login in copernicus site
def login(browser, loginUrl, userEmail, userPassword):
    try:
        # Make browser go to login page
        browser.get(loginUrl)
        # Find input for user email
        userDiv = browser.find_element_by_name('email')
        # Get user email and input it
        userDiv.send_keys(userEmail)
        # Find input for user password and input it
        passwordDiv = browser.find_element_by_name('password')
        passwordDiv.send_keys(userPassword)
        # Find login button and click it
        loginButton = browser.find_element_by_id('login-btn')
        loginButton.click()
        return True
    except Exception as e:
        log('\nError while trying to login into the system. Error: ' + e)
        return False

# Function to test user crud
def testUser(browser):
    try:
        userUrl = 'http://127.0.0.1:8000/users'
        # Make browser go to users page
        browser.get(userUrl)
        # Retry checkbox confirmation action 10 times in case checkbox isn't found
        try:
            # Find add new and click it
            addNewButton = browser.find_element_by_id('add-new-btn')
            addNewButton.click()
            time.sleep(3)
            # Input users info
            nameInput = browser.find_element_by_name('name')
            nameInput.send_keys('Teste Selenium')
            emailInput = browser.find_element_by_name('email')
            emailInput.send_keys('teste@selenium.com')
            passwordInput = browser.find_element_by_name('password')
            passwordInput.send_keys('123456789')
            passwordConfirmationInput = browser.find_element_by_name('password_confirmation')
            passwordConfirmationInput.send_keys('123456789')
            # Find submit button and click it
            submitButton = browser.find_element_by_id('save-btn')
            submitButton.click()
        except NoSuchElementException as e:
            log('\nError while trying to create the user: ' + e)
        return True    
    except Exception as e:
        log('\n' + e)
        return False

# Function to test class crud
def testClass(browser):
    try:
        userUrl = 'http://127.0.0.1:8000/classes'
        # Make browser go to users page
        browser.get(userUrl)
        # Retry checkbox confirmation action 10 times in case checkbox isn't found
        try:
            # Find add new and click it
            addNewButton = browser.find_element_by_id('add-new-btn')
            addNewButton.click()
            time.sleep(3)
            # Input class info
            yearInput = browser.find_element_by_name('year')
            yearInput.send_keys('Ano Teste')
            designationInput = browser.find_element_by_name('designation')
            designationInput.send_keys('B')
            # Find submit button and click it
            submitButton = browser.find_element_by_id('save-btn')
            submitButton.click()
        except NoSuchElementException as e:
            log('\nError while trying to create the class: ' + e)
        return True    
    except Exception as e:
        log('\n' + e)
        return False

# Function to test teacher crud
def testTeacher(browser):
    try:
        teacherUrl = 'http://127.0.0.1:8000/teachers'
        # Make browser go to teachers page
        browser.get(teacherUrl)
        # Retry checkbox confirmation action 10 times in case checkbox isn't found
        try:
            # Find add new and click it
            addNewButton = browser.find_element_by_id('add-new-btn')
            addNewButton.click()
            time.sleep(3)
            # Input teachers info
            nameInput = browser.find_element_by_name('name')
            nameInput.send_keys('Teste Selenium')
            dateVar = datetime.today().strftime('%d/%m/%Y')
            birthdateInput = browser.find_element_by_name('birthdate')
            birthdateInput.send_keys(dateVar)
            documentInput = browser.find_element_by_name('document')
            documentInput.send_keys('12345678912')
            phoneNumberInput = browser.find_element_by_name('phone_number')
            phoneNumberInput.send_keys('11999609839')
            sexInput = browser.find_element_by_xpath("//select[@name='sex']/option[text()='Feminino']")
            sexInput.click()
            addressInput = browser.find_element_by_name('address')
            addressInput.send_keys('Rua Teste')
            addressNumberInput = browser.find_element_by_name('address_number')
            addressNumberInput.send_keys('12')
            neighborhoodInput = browser.find_element_by_name('neighborhood')
            neighborhoodInput.send_keys('Bairro Teste')
            cityInput = browser.find_element_by_name('city')
            cityInput.send_keys('Cidade Teste')
            stateInput = browser.find_element_by_name('state')
            stateInput.send_keys('TE')
            zipcodeInput = browser.find_element_by_name('zipcode')
            zipcodeInput.send_keys('13450589')
            subjectsInput = browser.find_element_by_name('subjects')
            subjectsInput.send_keys('Disciplina teste')
            # Find submit button and click it
            submitButton = browser.find_element_by_id('save-btn')
            submitButton.click()
        except NoSuchElementException as e:
            log('\nError while trying to create the teacher: ' + e)
        return True    
    except Exception as e:
        log('\n' + e)
        return False

# Function to test student crud
def testStudent(browser):
    try:
        studentUrl = 'http://127.0.0.1:8000/students'
        # Make browser go to students page
        browser.get(studentUrl)
        # Retry checkbox confirmation action 10 times in case checkbox isn't found
        try:
            # Find add new and click it
            addNewButton = browser.find_element_by_id('add-new-btn')
            addNewButton.click()
            time.sleep(3)
            # Input students info
            nameInput = browser.find_element_by_name('name')
            nameInput.send_keys('Teste Selenium')
            dateVar = datetime.today().strftime('%d/%m/%Y')
            birthdateInput = browser.find_element_by_name('birthdate')
            birthdateInput.send_keys(dateVar)
            registrationNumberInput = browser.find_element_by_name('registration_number')
            registrationNumberInput.send_keys('2021006774')
            documentInput = browser.find_element_by_name('document')
            documentInput.send_keys('12345678912')
            phoneNumberInput = browser.find_element_by_name('phone_number')
            phoneNumberInput.send_keys('11999609839')
            classInput = browser.find_element_by_xpath("//select[@name='class_id']/option[text()='Nenhuma turma.']")
            classInput.click()
            addressInput = browser.find_element_by_name('address')
            addressInput.send_keys('Rua Teste')
            addressNumberInput = browser.find_element_by_name('address_number')
            addressNumberInput.send_keys('12')
            neighborhoodInput = browser.find_element_by_name('neighborhood')
            neighborhoodInput.send_keys('Bairro Teste')
            cityInput = browser.find_element_by_name('city')
            cityInput.send_keys('Cidade Teste')
            stateInput = browser.find_element_by_name('state')
            stateInput.send_keys('TE')
            zipcodeInput = browser.find_element_by_name('zipcode')
            zipcodeInput.send_keys('13450589')
            responsibleNameInput = browser.find_element_by_name('responsible_name')
            responsibleNameInput.send_keys('Responsável Teste')
            responsibleDocumentInput = browser.find_element_by_name('responsible_document')
            responsibleDocumentInput.send_keys('12345678998')
            responsiblePhoneNumberInput = browser.find_element_by_name('responsible_phone_number')
            responsiblePhoneNumberInput.send_keys('11999609839')
            sexInput = browser.find_element_by_xpath("//select[@name='sex']/option[text()='Feminino']")
            sexInput.click()
            # Find submit button and click it
            submitButton = browser.find_element_by_id('save-btn')
            submitButton.click()
        except NoSuchElementException as e:
            log('\nError while trying to create the student: ' + e)
        return True    
    except Exception as e:
        log('\n' + e)
        return False

# Function to test classrooms crud
def testClassroom(browser):
    try:
        classroomsUrl = 'http://127.0.0.1:8000/classrooms'
        # Make browser go to users page
        browser.get(classroomsUrl)
        # Retry checkbox confirmation action 10 times in case checkbox isn't found
        try:
            # Find add new and click it
            addNewButton = browser.find_element_by_id('add-new-btn')
            addNewButton.click()
            time.sleep(3)
            # Input classroom info
            idInput = browser.find_element_by_name('id')
            idInput.send_keys('321')
            capacityInput = browser.find_element_by_name('capacity')
            capacityInput.send_keys('48')
            checkboxInput = browser.find_element_by_xpath('/html/body/div/div[1]/section/div/div/form/div[1]/div/div[3]/div/input[2]')
            checkboxInput.click()
            # Find submit button and click it
            submitButton = browser.find_element_by_id('save-btn')
            submitButton.click()
        except NoSuchElementException as e:
            log('\nError while trying to create the classroom: ' + e)
        return True    
    except Exception as e:
        log('\n' + e)
        return False

# Function to test equipments crud
def testEquipment(browser):
    try:
        equipmentsUrl = 'http://127.0.0.1:8000/equipment'
        # Make browser go to users page
        browser.get(equipmentsUrl)
        # Retry checkbox confirmation action 10 times in case checkbox isn't found
        try:
            # Find add new and click it
            addNewButton = browser.find_element_by_id('add-new-btn')
            addNewButton.click()
            time.sleep(3)
            # Input classroom info
            nameInput = browser.find_element_by_name('name')
            nameInput.send_keys('Equipamento Teste')
            conditionInput = browser.find_element_by_xpath("//select[@name='condition']/option[text()='Em funcionamento']")
            conditionInput.click()
            descriptionInput = browser.find_element_by_name('description')
            descriptionInput.send_keys('Equipamento teste inserido com selenium.')
            dateVar = datetime.today().strftime('%d/%m/%Y')
            buy_dateInput = browser.find_element_by_name('buy_date')
            buy_dateInput.send_keys(dateVar)
            priceInput = browser.find_element_by_name('price')
            priceInput.send_keys('1')
            # Find submit button and click it
            nameInput.click()
            submitButton = browser.find_element_by_id('save-btn')
            submitButton.click()
        except NoSuchElementException as e:
            log('\nError while trying to create the classroom: ' + e)
        return True    
    except Exception as e:
        log('\n' + e)
        return False

# Function to test employee crud
def testEmployee(browser):
    try:
        employeeUrl = 'http://127.0.0.1:8000/employees'
        # Make browser go to employees page
        browser.get(employeeUrl)
        # Retry checkbox confirmation action 10 times in case checkbox isn't found
        try:
            # Find add new and click it
            addNewButton = browser.find_element_by_id('add-new-btn')
            addNewButton.click()
            time.sleep(3)
            # Input employees info
            nameInput = browser.find_element_by_name('name')
            nameInput.send_keys('Teste Selenium')
            dateVar = datetime.today().strftime('%d/%m/%Y')
            birthdateInput = browser.find_element_by_name('birthdate')
            birthdateInput.send_keys(dateVar)
            documentInput = browser.find_element_by_name('document')
            documentInput.send_keys('12345678912')
            phoneNumberInput = browser.find_element_by_name('phone_numer')
            phoneNumberInput.send_keys('11999609839')
            sexInput = browser.find_element_by_xpath("//select[@name='sex']/option[text()='Feminino']")
            sexInput.click()
            typeInput = browser.find_element_by_xpath("//select[@name='employee_type']/option[text()='Limpeza']")
            typeInput.click()
            addressInput = browser.find_element_by_name('address')
            addressInput.send_keys('Rua Teste')
            addressNumberInput = browser.find_element_by_name('address_number')
            addressNumberInput.send_keys('12')
            neighborhoodInput = browser.find_element_by_name('neighborhood')
            neighborhoodInput.send_keys('Bairro Teste')
            cityInput = browser.find_element_by_name('city')
            cityInput.send_keys('Cidade Teste')
            stateInput = browser.find_element_by_name('state')
            stateInput.send_keys('TE')
            zipcodeInput = browser.find_element_by_name('zipcode')
            zipcodeInput.send_keys('13450589')
            # Find submit button and click it
            submitButton = browser.find_element_by_id('save-btn')
            submitButton.click()
        except NoSuchElementException as e:
            log('\nError while trying to create the employee: ' + e)
        return True    
    except Exception as e:
        log('\n' + e)
        return False

# Append message in log file
def log(message):
    # Open log
    log = open(logPath, 'a')
    log.write(message)
    # Close the log file
    log.close()

# Return base path
def getBasePath():
    return os.path.abspath("")

if __name__ == '__main__':
    main()
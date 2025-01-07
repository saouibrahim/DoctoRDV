-- Insert locations
INSERT INTO LOCATIONS (name, postcode)
VALUES ('Downtown Clinic', '12345'),
    ('City Hospital', '54321'),
    ('Suburb Care Center', '67890');
-- Insert specializations
INSERT INTO SPECIALIZATION (name)
VALUES ('Cardiology'),
    ('Dermatology'),
    ('Neurology'),
    ('Pediatrics');
-- Insert doctors
INSERT INTO DOCTORS (
        firstname,
        lastname,
        email,
        phone,
        password,
        postcode,
        specialization_id
    )
VALUES (
        'John',
        'Doe',
        'johndoe@gmail.com',
        '1234567890',
        'password123',
        '12345',
        1
    ),
    (
        'Alice',
        'Smith',
        'alicesmith@gmail.com',
        '0987654321',
        'password456',
        '54321',
        2
    ),
    (
        'Robert',
        'Brown',
        'robertbrown@gmail.com',
        '1122334455',
        'password789',
        '67890',
        3
    ),
    (
        'Emily',
        'Davis',
        'emilydavis@gmail.com',
        '5566778899',
        'password101',
        '12345',
        4
    ),
    (
        'James',
        'Wilson',
        'jameswilson@gmail.com',
        '2233445566',
        'password102',
        '54321',
        1
    ),
    (
        'Sophia',
        'Taylor',
        'sophiataylor@gmail.com',
        '6677889900',
        'password103',
        '67890',
        2
    ),
    (
        'Michael',
        'Anderson',
        'michaelanderson@gmail.com',
        '7788990011',
        'password104',
        '12345',
        3
    ),
    (
        'Emma',
        'Thomas',
        'emmathomas@gmail.com',
        '8899001122',
        'password105',
        '54321',
        4
    ),
    (
        'David',
        'Moore',
        'davidmoore@gmail.com',
        '9900112233',
        'password106',
        '67890',
        1
    ),
    (
        'Olivia',
        'Jackson',
        'oliviajackson@gmail.com',
        '1231231234',
        'password107',
        '12345',
        2
    );
-- Insert patients
INSERT INTO PATIENTS (firstname, lastname, email, phone, password)
VALUES (
        'Liam',
        'Martinez',
        'liammartinez@gmail.com',
        '3213213210',
        'patientpass1'
    ),
    (
        'Noah',
        'Garcia',
        'noahgarcia@gmail.com',
        '6546546540',
        'patientpass2'
    ),
    (
        'William',
        'Rodriguez',
        'williamrodriguez@gmail.com',
        '9879879870',
        'patientpass3'
    ),
    (
        'Mason',
        'Hernandez',
        'masonhernandez@gmail.com',
        '4564564560',
        'patientpass4'
    ),
    (
        'Lucas',
        'Lopez',
        'lucaslopez@gmail.com',
        '7897897890',
        'patientpass5'
    ),
    (
        'Henry',
        'Gonzalez',
        'henrygonzalez@gmail.com',
        '1239876540',
        'patientpass6'
    ),
    (
        'Alexander',
        'Perez',
        'alexanderperez@gmail.com',
        '7418529630',
        'patientpass7'
    ),
    (
        'Ethan',
        'Martinez',
        'ethanmartinez@gmail.com',
        '9632587410',
        'patientpass8'
    ),
    (
        'Michael',
        'Sanchez',
        'michaelsanchez@gmail.com',
        '8527419630',
        'patientpass9'
    ),
    (
        'Benjamin',
        'Ramirez',
        'benjaminramirez@gmail.com',
        '1593574560',
        'patientpass10'
    );
-- Insert availability
INSERT INTO AVAILABILITY (
        date,
        start_time,
        end_time,
        doctor_id,
        location_id
    )
VALUES ('2025-01-06', '09:00:00', '10:00:00', 1, 1),
    ('2025-01-06', '10:00:00', '11:00:00', 2, 2),
    ('2025-01-06', '11:00:00', '12:00:00', 3, 3),
    ('2025-01-06', '13:00:00', '14:00:00', 4, 1),
    ('2025-01-06', '14:00:00', '15:00:00', 5, 2),
    ('2025-01-06', '15:00:00', '16:00:00', 6, 3),
    ('2025-01-06', '16:00:00', '17:00:00', 7, 1),
    ('2025-01-06', '17:00:00', '18:00:00', 8, 2),
    ('2025-01-06', '18:00:00', '19:00:00', 9, 3),
    ('2025-01-06', '19:00:00', '20:00:00', 10, 1);
-- Insert appointments
INSERT INTO APPOINTMENT (
        date,
        start_time,
        end_time,
        availability_id,
        patient_id
    )
VALUES ('2025-01-06', '09:00:00', '10:00:00', 1, 1),
    ('2025-01-06', '10:00:00', '11:00:00', 2, 2),
    ('2025-01-06', '11:00:00', '12:00:00', 3, 3),
    ('2025-01-06', '13:00:00', '14:00:00', 4, 4),
    ('2025-01-06', '14:00:00', '15:00:00', 5, 5),
    ('2025-01-06', '15:00:00', '16:00:00', 6, 6),
    ('2025-01-06', '16:00:00', '17:00:00', 7, 7),
    ('2025-01-06', '17:00:00', '18:00:00', 8, 8),
    ('2025-01-06', '18:00:00', '19:00:00', 9, 9),
    ('2025-01-06', '19:00:00', '20:00:00', 10, 10);
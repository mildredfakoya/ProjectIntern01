<?php
require_once "assessment.php";
 ?>
<body class="dis_assess_forms">




<nav class="dis_assess_nav">
    <button onclick="showForm('elimination')">Elimination Disorder</button>
    <br/>
    <br/>

    <button onclick="showForm('trauma')">Trauma & Stressor Disorder</button>
    <br/>
    <br/>

    <button onclick="showForm('sexual')">Sexual Dysfunctions</button>
    <br/>
    <br/>

    <button onclick="showForm('gender')">Gender Dysphoria</button>
    <br/>
    <br/>

    <button onclick="showForm('substance')">Substance-related & Addictive Disorders</button>
    <br/>
    <br/>

    <button onclick="showForm('neurocognitive')">Neurocognitive Disorders</button>
    <br/>
    <br/>

    <button onclick="showForm('anxiety')">Anxiety Disorder</button>
    <br/>
    <br/>

    <button onclick="showForm('depression')">Depressive Disorder</button>
    <br/>
    <br/>

    <button onclick="showForm('bipolar')">Bipolar Disorder</button>
    <br/>
    <br/>

    <button onclick="showForm('Obsessive_compulsive')">Obsessive Compulsive Disorder</button>
    <br/>
    <br/>

    <button onclick="showForm('dissociative')">Dissociative Disorder</button>
    <br/>
    <br/>

    <button onclick="showForm('feeding_eating')">Feeding & Eating Disorder</button>
    <br/>
    <br/>

    <button onclick="showForm('sleep_wake')">Sleep-wake disorder</button>
    <br/>
    <br/>
</nav>

<div class="assess_forms_container">
      <!--<h2 style="background: linear-gradient(90deg, rgba(2, 0, 36, 1) 0%, rgba(9, 9, 121, 1) 35%, rgba(0, 212, 255, 1) 100%);
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;"></h2>-->
    <h2 class="H_assess_forms">Disorder Form</h2>

    <hr>
     <form class="F_assess_forms" id="eliminationForm">

       <p><b>Elimination Disorder</b><br>
            Elimination disorders all involve the inappropriate elimination of urine or feces and are usually first diagnosed in childhood or adolescence.
            This group of disorders includes enuresis, the repeated voiding of urine into inappropriate places, and encopresis, the repeated passage of feces into inappropriate places.
            </p>
        <label for="frequencyIntensity">1. Can you describe the frequency and intensity of the bowel or bladder symptoms your child is experiencing?</label></br>
        <input type="text" id="frequencyIntensity" name="frequencyIntensity" required>
       <br/>
       <br/>
       <br/>

        <label for="symptomOnset">2. When did you first notice these symptoms, and have they changed in severity over time?</label></br>
        <input type="text" id="symptomOnset" name="symptomOnset" required>
        <br/>
        <br/>
        <br/>

        <label for="stressfulEvents">3. Have there been any recent stressful events or changes in your child's life that may be contributing to these symptoms?</label>
        <br/>
        <input type="text" id="stressfulEvents" name="stressfulEvents" required>
        <br/>
        <br/>
        <br/>

        <label for="toiletingHabits">4. Can you provide information on your child's toileting habits, such as any rituals, fears, or avoidance behaviors related to using the bathroom?</label>
        <br/>
        <input type="text" id="toiletingHabits" name="toiletingHabits" required>
        <br/>
        <br/>
        <br/>

        <label for="emotionalWellBeing">5. How is your child's overall emotional well-being, and have there been any changes in mood or behavior that coincide with the onset of these symptoms?</label>
        <br/>
        <input type="text" id="emotionalWellBeing" name="emotionalWellBeing" required>
        <br/>
        <br/>
        <br/>

        <label for="medicalConditions">6. Are there any physical symptoms or medical conditions that might be contributing to the elimination difficulties your child is facing?</label>
        <br/>
        <input type="text" id="medicalConditions" name="medicalConditions" required>
        <br/>
        <br/>
        <br/>

        <label for="familyEnvironment">7. Can you describe the family environment and any significant family stressors that might be impacting your child's behavior?</label>
        <br/>
        <input type="text" id="familyEnvironment" name="familyEnvironment" required>
        <br/>
        <br/>
        <br/>

        <label for="copingChallenges">8. How is your child coping with the challenges related to elimination, both at home and in social or academic settings?</label>
        <br/>
        <input type="text" id="copingChallenges" name="copingChallenges" required>
        <br/>
        <br/>


        <button onclick="saveFormData('eliminationForm')" type="submit" class="btn btn-primary">Save</button>

    </form>

    <form class="F_assess_forms" id="traumaForm">
        <p><b>Trauma & Stressor Disorder</b><br>
            Trauma- and stressor-related disorders include disorders in which exposure to a traumatic or stressful event is listed explicitly as a diagnostic criterion.
            These include reactive attachment disorder, disinhibited social engagement disorder, posttraumatic stress disorder (PTSD), acute stress disorder, adjustment disorders, and prolonged grief disorder.
            </p>
        <label for="traumaticEvent">1. Can you describe any recent or past traumatic events that you believe may be affecting your mental health?</label><br/>
        <input type="text" id="traumaticEvent" name="traumaticEvent" required>
        <br/>
        <br/>
        <br/>

        <label for="traumaticImpact">2. How has the traumatic experience impacted your daily life, relationships, and overall functioning?</label><br/>
        <input type="text" id="traumaticImpact" name="traumaticImpact" required>
        <br/>
        <br/>
        <br/>

        <label for="traumaticTriggers">3. Have you noticed any specific triggers that seem to exacerbate your emotional or psychological distress?</label>
        <br/>
        <input type="text" id="traumaticTriggers" name="traumaticTriggers" required>
        <br/>
        <br/>
        <br/>

        <label for="traumaSymptoms">4. Can you share any physical symptoms you may be experiencing, such as sleep disturbances, changes in appetite, or heightened arousal?</label>
        <br/>
        <input type="text" id="traumaSymptoms" name="traumaSymptoms" required>
        <br/>
        <br/>
        <br/>

        <label for="traumaSupport">5. Have you sought support or counseling in the aftermath of the traumatic event, and if so, what has been your experience with those interventions?</label>
       <br/>
       <input type="text" id="traumaSupport" name="traumaSupport" required>
        <br/>
        <br/>
        <br/>

        <label for="traumaticDreams">6. Are there any persistent intrusive thoughts, memories, or nightmares related to the traumatic incident?</label></br>
        <input type="text" id="traumaticDreams" name="traumaticDreams" required>
        <br/>
        <br/>
        <br/>

        <label for="traumaRelationships">7. How have your interpersonal relationships been affected since the traumatic event, including relationships with family, friends, or colleagues?</label>
       </br>
        <input type="text" id="traumaRelationships" name="traumaRelationships" required>
        <br/>
        <br/>
        <br/>


        <label for="traumaCoping">8. Can you describe any efforts you've made to cope with the emotional impact of the trauma, such as avoidance behaviors or substance use?</label></br>
        <input type="text" id="traumaCoping" name="traumaCoping" required>
        <br/>
        <br/>

        <button onclick="saveFormData('traumaForm')" type="submit" class="btn btn-primary">Save</button>
    </form>

    <form class="F_assess_forms" id="sexualForm">
        <p><b>Sexual Dysfunctions</b><br>
            In the DSM-5, sexual dysfunctions are defined as “a clinically significant disturbance in a person's ability to respond sexually or to experience sexual pleasure”.
            </p>
        <label for="sexDifficulties">1. How would you describe your current sexual difficulties or concerns, and when did you first notice them?</label></br>
        <input type="text" id="sexdifficulties" name="sexdifficulties" required>
        <br/>
        <br/>
        <br/>

        <label for="sexActivities">2. Can you provide details about the specific sexual activities that are causing distress or impairment in your life?</label></br>
        <input type="text" id="sexActivities" name="sexActivities" required>
        <br/>
        <br/>
        <br/>

        <label for="lifeChanges">3. Have there been any recent changes in your relationship or life circumstances that may be contributing to these sexual difficulties?</label></br>
        <input type="text" id="lifeChanges" name="lifeChanges" required>
        <br/>
        <br/>
        <br/>

        <label for="sexFunction">4. Are there any medical conditions, medications, or substance use that could potentially impact your sexual function?</label></br>
        <input type="text" id="sexFunction" name="sexFunction" required>
        <br/>
        <br/>
        <br/>

        <label for="sexFrequency">5. Can you describe the frequency and context of sexual activities and any challenges or discomfort you experience during them?</label></br>
        <input type="text" id="sexFrequency" name="sexFrequency" required>
        <br/>
        <br/>
        <br/>

        <label for="emotionalFactors">6. Have you noticed any emotional factors, such as stress, anxiety, or depression, that seem to be related to your sexual concerns?</label></br>
        <input type="text" id="emotionalFactors" name="emotionalFactors" required>
        <br/>
        <br/>
        <br/>

        <label for="sexDesire">7. How do you perceive your level of sexual desire, and have there been changes in your interest or motivation for sexual activity?</label></br>
        <input type="text" id="sexDesire" name="sexDesire" required>
        <br/>
        <br/>
        <br/>

        <label for="sexInfluence">8. Are there any past traumatic experiences or negative beliefs about sex that might be influencing your current sexual functioning?</label></br>
        <input type="text" id="sexInfluence" name="sexInfluence" required>
        <br/>
        <br/>

        <button onclick="saveFormData('traumaForm')" type="submit" class="btn btn-primary">Save</button>
    </form>

    <form class="F_assess_forms" id="genderForm">
        <p><b>Gender Dysphoria</b><br>
            A concept designated in the DSM-5-TR as clinically significant distress or impairment related to gender incongruence,
            which may include desire to change primary and/or secondary sex characteristics.
            </p>
            <br/>

        <label for="genderIdentity">1. How would you describe your current gender identity, and has it changed over time?</label></br>
        <input type="text" id="genderIdentity" name="genderIdentity" required>
        <br/>
        <br/>
        <br/>

        <label for="genderHistory">2. Can you provide a brief history of when you first became aware of any incongruence between your assigned gender at birth and your experienced or expressed gender?</label></br>
        <input type="text" id="genderHistory" name="genderHistory" required>
        <br/>
        <br/>
        <br/>

        <label for="genderDiscomfort">3. Have you experienced any distress or discomfort related to your gender identity, and if so, can you describe the nature and intensity of these feelings?</label></br>
        <input type="text" id="genderDiscomfort" name="genderDiscomfort" required>
        <br/>
        <br/>
        <br/>

        <label for="genderExpression">4. Are there specific situations or contexts in which you feel more or less comfortable expressing your gender identity?</label></br>
        <input type="text" id="genderExpression" name="genderExpression" required>
        <br/>
        <br/>
        <br/>

        <label for="genderExperience">5. Have you taken any steps to align your physical appearance or presentation with your experienced gender? </label></br>
        <input type="text" id="genderExperience" name="genderExperience" required>
        <br/>
        <br/>
        <br/>

        <label for="genderRelationships">6. How have your relationships with friends, family, and colleagues been affected by your gender identity, and have you encountered any challenges or sources of support?</label></br>
        <input type="text" id="genderRelationships" name="genderRelationships" required>
        <br/>
        <br/>
        <br/>

        <label for="genderSymptoms">7. Are there any mental health symptoms or conditions that you believe are associated with your experiences of gender dysphoria?</label></br>
        <input type="text" id="genderSymptoms" name="genderSymptoms" required>
        <br/>
        <br/>
        <br/>

        <label for="genderTreatment">8. Have you sought or are you currently receiving any form of support or treatment, such as counseling, hormone therapy, or gender-affirming surgeries, to address your gender dysphoria?</label></br>
        <input type="text" id="genderTreatment" name="genderTreatment" required>
        <br/>
        <br/>
        <button onclick="saveFormData('traumaForm')" type="submit" class="btn btn-primary">Save</button>
    </form>

    <form class="F_assess_forms" id="substanceForm">
        <p><b>Substance related & Addictive Disorders </b><br>
            This is defined as using more of a substance than intended or using it for longer than you're meant to.
            </p>
            <br/>
            <br/>
        <label for="substanceHistory">1. Can you provide a detailed history of your substance use, including the types of substances used, frequency, and duration of use?</label></br>
        <input type="text" id="substanceHistory" name="substanceHistory" required>
        <br/>
        <br/>
        <br/>

        <label for="substancePattern">2. Have you noticed a pattern of increasing tolerance to the substance, requiring more to achieve the desired effect?</label></br>
        <input type="text" id="substancePattern" name="substancePattern" required>
        <br/>
        <br/>
        <br/>

        <label for="substancewithdrawal">3. Do you experience withdrawal symptoms when you reduce or stop using the substance, and if so, what are they?</label></br>
        <input type="text" id="substancewithdrawal" name="substancewithdrawal" required>
        <br/>
        <br/>
        <br/>

        <label for="substanceUse">4. How has your substance use impacted your daily life, relationships, and overall functioning?</label></br>
        <input type="text" id="substanceUse" name="substanceUse" required>
        <br/>
        <br/>
        <br/>

        <label for="substanceAttempts">5. Have there been unsuccessful attempts to cut down or control your substance use? </label></br>
        <input type="text" id="substanceAttempts" name="substanceAttempts" required>
        <br/>
        <br/>
        <br/>

        <label for="substanceTriggers">6. Can you identify any triggers or situations that lead to increased substance use, or instances where you have tried to abstain but were unsuccessful?</label></br>
        <input type="text" id="substanceTriggers" name="substanceTriggers" required>
        <br/>
        <br/>
        <br/>

        <label for="substanceStressors">7. Are there underlying stressors, mental health issues, or co-occurring disorders that you believe may be contributing to your substance use?</label></br>
        <input type="text" id="substanceStressors" name="substanceStressors" required>
        <br/>
        <br/>
        <br/>

        <label for="substanceTreatment">8. Have you sought or received any previous treatment or interventions for your substance use, and if so, what has been your experience with those efforts?</label></br>
        <input type="text" id="substanceTreatment" name="substanceTreatment" required>
        <br/>
        <br/>
        <button onclick="saveFormData('traumaForm')" type="submit" class="btn btn-primary">Save</button>
    </form>

    <form class="F_assess_forms" id="neurocognitiveForm">
        <p><b>Substance related & Addictive Disorders </b><br>
            These disorders have diverse clinical characteristics and aetiologies, with Alzheimer disease,
            cerebrovascular disease, Lewy body disease, frontotemporal degeneration, traumatic brain injury, infections, and alcohol abuse representing common causes.
            </p>
            <br/>

        <label for="cognitiveChanges">1. Can you describe any changes you've noticed in your cognitive abilities, such as memory, attention, or problem-solving skills?</label></br>
        <input type="text" id="substanceHistory" name="substanceHistory" required>
        <br/>
        <br/>
        <br/>

        <label for="cognitiveObservation">2. When did you or others first observe these cognitive changes, and have they progressed or remained stable over time?</label></br>
        <input type="text" id="substancePattern" name="substancePattern" required>
        <br/>
        <br/>
        <br/>

        <label for="cognitiveActivities">3. Are there specific daily activities or tasks where you've encountered difficulties due to cognitive impairment?</label></br>
        <input type="text" id="substancewithdrawal" name="substancewithdrawal" required>
        <br/>
        <br/>
        <br/>

        <label for="cognitiveLanguage">4. Have you experienced any language difficulties, such as trouble finding the right words or understanding spoken or written language?</label></br>
        <input type="text" id="substanceUse" name="substanceUse" required>
        <br/>
        <br/>
        <br/>

        <label for="cognitiveInstances">5. Are there instances where you've become disoriented, confused about time or place, or had difficulty recognizing familiar people or objects?</label></br>
        <input type="text" id="substanceAttempts" name="substanceAttempts" required>
        <br/>
        <br/>
        <br/>

        <label for="cognitiveBehaviour">6.Have you noticed changes in your mood or behavior that could be related to cognitive decline?</label></br>
        <input type="text" id="substanceTriggers" name="substanceTriggers" required>
        <br/>
        <br/>
        <br/>

        <label for="cognitiveHistory">7. Can you provide information about your medical history, including any conditions or medications that might contribute to neurocognitive symptoms?</label></br>
        <input type="text" id="substanceStressors" name="substanceStressors" required>
        <br/>
        <br/>
        <br/>

        <label for="cognitiveRelationships">8. How has the cognitive impairment affected your relationships, work, or other important areas of your life?</label></br>
        <input type="text" id="substanceTreatment" name="substanceTreatment" required>
        <br/>
        <br/>
        <button onclick="saveFormData('traumaForm')" type="submit" class="btn btn-primary">Save</button>
    </form>

    <form class="F_assess_forms" id="neurodevelopmentForm">
        <p><b>Neuro-development Disorders </b>
          <br/>
            In DSM 5 , NDDs are defined as a group of conditions with onset in the developmental period, inducing deficits that produce impairments of functioning.
            </p>
            <br/>
            <br/>
        <label for="developmentMilestones">1. Can you describe any developmental milestones that were delayed or not achieved during childhood?</label></br>
        <input type="text" id="developmentMilestones" name="developmentMilestones" required>
        <br/>
        <br/>
        <br/>

        <label for="developmentDifficulties">2. Have you or others noticed persistent difficulties in social communication and interaction with others, including challenges in understanding nonverbal cues or forming relationships?</label></br>
        <input type="text" id="substancePattern" name="substancePattern" required>
        <br/>
        <br/>
        <br/>

        <label for="developmentBehaviours">3. Are there repetitive behaviors, interests, or activities that have been a consistent part of your behavior, and do these patterns interfere with daily life or relationships?</label></br>
        <input type="text" id="developmentBehaviours" name="developmentBehaviours" required>
        <br/>
        <br/>
        <br/>

        <label for="developmentAcademic">4. Did you experience difficulties in academic settings, such as challenges with reading, writing, or mathematics, that may have been present since childhood?</label></br>
        <input type="text" id="developmentAcademic" name="developmentAcademic" required>
        <br/>
        <br/>
        <br/>

        <label for="developmentSensory">5. Can you provide information about any sensory sensitivities or unusual reactions to sensory stimuli that you've experienced?</label></br>
        <input type="text" id="developmentSensory" name="developmentSensory" required>
        <br/>
        <br/>
        <br/>

        <label for="developmentSymptoms">6.Have there been any coexisting conditions or mental health symptoms that may be related to the neurodevelopmental challenges you are facing?</label></br>
        <input type="text" id="developmentSymptoms" name="developmentSymptoms" required>
        <br/>
        <br/>
        <br/>

        <label for="developmentChallenges">7. How have these challenges affected your daily life, relationships, and academic or occupational functioning?</label></br>
        <input type="text" id="developmentChallenges" name="developmentChallenges" required>
        <br/>
        <br/>
        <br/>

        <label for="developmentHistory">8. Can you share information about your family history, including whether there is a family history of neurodevelopmental disorders or related conditions?</label></br>
        <input type="text" id="developmentHistory" name="developmentHistory" required>
        <br/>
        <br/>
        <button onclick="saveFormData('traumaForm')" type="submit" class="btn btn-primary">Save</button>
    </form>



























    <form class="F_assess_forms" id="anxietyForm">

      <p><b>Anxiety Disorder</b><br>
           Anxiety disorder is a group of mental illnesses characterized by persistent and
           excessive fear and worry. Unlike occasional anxiety, which most people experience
           during stressful situations, anxiety disorders involve intense and prolonged
           symptoms that significantly impact daily life.
           </p>
       <label for="momentFeeling">1. How are you feeling at this moment?</label></br>
       <input type="text" id="momentFeeling" name="momentFeeling" required>
      <br/>
      <br/>
      <br/>

       <label for="anxietyScale">2. Check in with your breathing, muscle tension, and thoughts.
                                 On a scale from 1 to 10, where 1 represents no anxiety at all
                                 and 10 signifies the highest distress level,
                                 how would you rate your anxiety right now?</label></br>

      <select>
      <option value="select">Select</option>
       <option value="1">1</option>
       <option value="2">2</option>
       <option value="3">3</option>
       <option value="4">4</option>
       <option value="5">5</option>
       <option value="6">6</option>
       <option value="7">7</option>
       <option value="8">8</option>
       <option value="9">9</option>
       <option value="10">10</option>
       </select>
       <input id="anxietyScale" name="anxietyScale" required>
       <br/>
       <br/>
       <br/>

       <label for="reduceAnxiety">3. What would it take to reduce your anxiety rating by one point?
         Exploring coping strategies and identifying potential triggers can be helpful.</label>
       <br/>
       <input type="text" id="reduceAnxiety" name="reduceAnxiety" required>
       <br/>
       <br/>
       <br/>

       <label for="anxiousSigns">4. What are some signs or symptoms that arise when you feel anxious? Understanding physical sensations,
         racing thoughts, or behavioral changes can provide valuable insights.</label>
       <br/>
       <input type="text" id="anxiousSigns" name="anxiousSigns" required>
       <br/>
       <br/>
       <br/>

       <label for="copingDiscoveries">5. Have you discovered any coping skills that help manage anxiety when it arises?
         Learning about effective strategies can guide treatment planning.</label>
       <br/>
       <input type="text" id="copingDiscoveries" name="copingDiscoveries" required>
       <br/>
       <br/>
       <br/>

       <label for="bodyFeeling">6. Where in your body do you feel anxiety?
         Some individuals experience tension in specific areas, such as the chest, stomach, or shoulders.</label>
       <br/>
       <input type="text" id="bodyFeeling" name="bodyFeeling" required>
       <br/>
       <br/>
       <br/>

       <label for="sessionDiscription">7. How would you describe your thoughts since our last session?
         Examining thought patterns and cognitive distortions is essential.</label>
       <br/>
       <input type="text" id="sessionDiscription" name="sessionDiscription" required><br/>
       <br/>
       <br/>

       <button onclick="saveFormData('traumaForm')" type="submit" class="btn btn-primary">Save</button>

   </form>

   <form class="F_assess_forms" id="depressionForm">

     <p><b>Elimination Disorder</b><br>
          Elimination disorders all involve the inappropriate elimination of urine or feces and are usually first diagnosed in childhood or adolescence.
          This group of disorders includes enuresis, the repeated voiding of urine into inappropriate places, and encopresis, the repeated passage of feces into inappropriate places.
          </p>
      <label for="frequencyIntensity">1. Can you describe the frequency and intensity of the bowel or bladder symptoms your child is experiencing?</label></br>
      <input type="text" id="frequencyIntensity" name="frequencyIntensity" required>
     <br/>
     <br/>
     <br/>

      <label for="symptomOnset">2. When did you first notice these symptoms, and have they changed in severity over time?</label></br>
      <input type="text" id="symptomOnset" name="symptomOnset" required>
      <br/>
      <br/>
      <br/>

      <label for="stressfulEvents">3. Have there been any recent stressful events or changes in your child's life that may be contributing to these symptoms?</label>
      <br/>
      <input type="text" id="stressfulEvents" name="stressfulEvents" required>
      <br/>
      <br/>
      <br/>

      <label for="toiletingHabits">4. Can you provide information on your child's toileting habits, such as any rituals, fears, or avoidance behaviors related to using the bathroom?</label>
      <br/>
      <input type="text" id="toiletingHabits" name="toiletingHabits" required>
      <br/>
      <br/>
      <br/>

      <label for="emotionalWellBeing">5. How is your child's overall emotional well-being, and have there been any changes in mood or behavior that coincide with the onset of these symptoms?</label>
      <br/>
      <input type="text" id="emotionalWellBeing" name="emotionalWellBeing" required>
      <br/>
      <br/>
      <br/>

      <label for="medicalConditions">6. Are there any physical symptoms or medical conditions that might be contributing to the elimination difficulties your child is facing?</label>
      <br/>
      <input type="text" id="medicalConditions" name="medicalConditions" required>
      <br/>
      <br/>
      <br/>

      <label for="familyEnvironment">7. Can you describe the family environment and any significant family stressors that might be impacting your child's behavior?</label>
      <br/>
      <input type="text" id="familyEnvironment" name="familyEnvironment" required><br/>

      <label for="copingChallenges">8. How is your child coping with the challenges related to elimination, both at home and in social or academic settings?</label>
      <br/>
      <input type="text" id="copingChallenges" name="copingChallenges" required>
      <br/>
      <br/>

      <button onclick="saveFormData('traumaForm')" type="submit" class="btn btn-primary">Save</button>

  </form>

  <form class="F_assess_forms" id="bipolarForm">

    <p><b>Elimination Disorder</b><br>
         Elimination disorders all involve the inappropriate elimination of urine or feces and are usually first diagnosed in childhood or adolescence.
         This group of disorders includes enuresis, the repeated voiding of urine into inappropriate places, and encopresis, the repeated passage of feces into inappropriate places.
         </p>
     <label for="frequencyIntensity">1. Can you describe the frequency and intensity of the bowel or bladder symptoms your child is experiencing?</label></br>
     <input type="text" id="frequencyIntensity" name="frequencyIntensity" required>
    <br/>
    <br/>
    <br/>

     <label for="symptomOnset">2. When did you first notice these symptoms, and have they changed in severity over time?</label></br>
     <input type="text" id="symptomOnset" name="symptomOnset" required>
     <br/>
     <br/>
     <br/>

     <label for="stressfulEvents">3. Have there been any recent stressful events or changes in your child's life that may be contributing to these symptoms?</label>
     <br/>
     <input type="text" id="stressfulEvents" name="stressfulEvents" required>
     <br/>
     <br/>
     <br/>

     <label for="toiletingHabits">4. Can you provide information on your child's toileting habits, such as any rituals, fears, or avoidance behaviors related to using the bathroom?</label>
     <br/>
     <input type="text" id="toiletingHabits" name="toiletingHabits" required>
     <br/>
     <br/>
     <br/>

     <label for="emotionalWellBeing">5. How is your child's overall emotional well-being, and have there been any changes in mood or behavior that coincide with the onset of these symptoms?</label>
     <br/>
     <input type="text" id="emotionalWellBeing" name="emotionalWellBeing" required>
     <br/>
     <br/>
     <br/>

     <label for="medicalConditions">6. Are there any physical symptoms or medical conditions that might be contributing to the elimination difficulties your child is facing?</label>
     <br/>
     <input type="text" id="medicalConditions" name="medicalConditions" required>
     <br/>
     <br/>
     <br/>

     <label for="familyEnvironment">7. Can you describe the family environment and any significant family stressors that might be impacting your child's behavior?</label>
     <br/>
     <input type="text" id="familyEnvironment" name="familyEnvironment" required><br/>

     <label for="copingChallenges">8. How is your child coping with the challenges related to elimination, both at home and in social or academic settings?</label>
     <br/>
     <input type="text" id="copingChallenges" name="copingChallenges" required>
     <br/>
     <br/>

     <button onclick="saveFormData('traumaForm')" type="submit" class="btn btn-primary">Save</button>

 </form>

 <form class="F_assess_forms" id="Obsessive_compulsiveForm">

   <p><b>Elimination Disorder</b><br>
        Elimination disorders all involve the inappropriate elimination of urine or feces and are usually first diagnosed in childhood or adolescence.
        This group of disorders includes enuresis, the repeated voiding of urine into inappropriate places, and encopresis, the repeated passage of feces into inappropriate places.
        </p>
    <label for="frequencyIntensity">1. Can you describe the frequency and intensity of the bowel or bladder symptoms your child is experiencing?</label></br>
    <input type="text" id="frequencyIntensity" name="frequencyIntensity" required>
   <br/>
   <br/>
   <br/>

    <label for="symptomOnset">2. When did you first notice these symptoms, and have they changed in severity over time?</label></br>
    <input type="text" id="symptomOnset" name="symptomOnset" required>
    <br/>
    <br/>
    <br/>

    <label for="stressfulEvents">3. Have there been any recent stressful events or changes in your child's life that may be contributing to these symptoms?</label>
    <br/>
    <input type="text" id="stressfulEvents" name="stressfulEvents" required>
    <br/>
    <br/>
    <br/>

    <label for="toiletingHabits">4. Can you provide information on your child's toileting habits, such as any rituals, fears, or avoidance behaviors related to using the bathroom?</label>
    <br/>
    <input type="text" id="toiletingHabits" name="toiletingHabits" required>
    <br/>
    <br/>
    <br/>

    <label for="emotionalWellBeing">5. How is your child's overall emotional well-being, and have there been any changes in mood or behavior that coincide with the onset of these symptoms?</label>
    <br/>
    <input type="text" id="emotionalWellBeing" name="emotionalWellBeing" required>
    <br/>
    <br/>
    <br/>

    <label for="medicalConditions">6. Are there any physical symptoms or medical conditions that might be contributing to the elimination difficulties your child is facing?</label>
    <br/>
    <input type="text" id="medicalConditions" name="medicalConditions" required>
    <br/>
    <br/>
    <br/>

    <label for="familyEnvironment">7. Can you describe the family environment and any significant family stressors that might be impacting your child's behavior?</label>
    <br/>
    <input type="text" id="familyEnvironment" name="familyEnvironment" required><br/>

    <label for="copingChallenges">8. How is your child coping with the challenges related to elimination, both at home and in social or academic settings?</label>
    <br/>
    <input type="text" id="copingChallenges" name="copingChallenges" required>
    <br/>
    <br/>

    <button onclick="saveFormData('traumaForm')" type="submit" class="btn btn-primary">Save</button>

</form>

<form class="F_assess_forms" id="dissociativeForm">

  <p><b>Elimination Disorder</b><br>
       Elimination disorders all involve the inappropriate elimination of urine or feces and are usually first diagnosed in childhood or adolescence.
       This group of disorders includes enuresis, the repeated voiding of urine into inappropriate places, and encopresis, the repeated passage of feces into inappropriate places.
       </p>
   <label for="frequencyIntensity">1. Can you describe the frequency and intensity of the bowel or bladder symptoms your child is experiencing?</label></br>
   <input type="text" id="frequencyIntensity" name="frequencyIntensity" required>
  <br/>
  <br/>
  <br/>

   <label for="symptomOnset">2. When did you first notice these symptoms, and have they changed in severity over time?</label></br>
   <input type="text" id="symptomOnset" name="symptomOnset" required>
   <br/>
   <br/>
   <br/>

   <label for="stressfulEvents">3. Have there been any recent stressful events or changes in your child's life that may be contributing to these symptoms?</label>
   <br/>
   <input type="text" id="stressfulEvents" name="stressfulEvents" required>
   <br/>
   <br/>
   <br/>

   <label for="toiletingHabits">4. Can you provide information on your child's toileting habits, such as any rituals, fears, or avoidance behaviors related to using the bathroom?</label>
   <br/>
   <input type="text" id="toiletingHabits" name="toiletingHabits" required>
   <br/>
   <br/>
   <br/>

   <label for="emotionalWellBeing">5. How is your child's overall emotional well-being, and have there been any changes in mood or behavior that coincide with the onset of these symptoms?</label>
   <br/>
   <input type="text" id="emotionalWellBeing" name="emotionalWellBeing" required>
   <br/>
   <br/>
   <br/>

   <label for="medicalConditions">6. Are there any physical symptoms or medical conditions that might be contributing to the elimination difficulties your child is facing?</label>
   <br/>
   <input type="text" id="medicalConditions" name="medicalConditions" required>
   <br/>
   <br/>
   <br/>

   <label for="familyEnvironment">7. Can you describe the family environment and any significant family stressors that might be impacting your child's behavior?</label>
   <br/>
   <input type="text" id="familyEnvironment" name="familyEnvironment" required><br/>

   <label for="copingChallenges">8. How is your child coping with the challenges related to elimination, both at home and in social or academic settings?</label>
   <br/>
   <input type="text" id="copingChallenges" name="copingChallenges" required>
   <br/>
   <br/>

   <button onclick="saveFormData('eliminationForm')" type="submit" class="btn btn-primary">Save</button>

</form>

<form class="F_assess_forms" id="feeding_eatingForm">

  <p><b>Elimination Disorder</b><br>
       Elimination disorders all involve the inappropriate elimination of urine or feces and are usually first diagnosed in childhood or adolescence.
       This group of disorders includes enuresis, the repeated voiding of urine into inappropriate places, and encopresis, the repeated passage of feces into inappropriate places.
       </p>
   <label for="frequencyIntensity">1. Can you describe the frequency and intensity of the bowel or bladder symptoms your child is experiencing?</label></br>
   <input type="text" id="frequencyIntensity" name="frequencyIntensity" required>
  <br/>
  <br/>
  <br/>

   <label for="symptomOnset">2. When did you first notice these symptoms, and have they changed in severity over time?</label></br>
   <input type="text" id="symptomOnset" name="symptomOnset" required>
   <br/>
   <br/>
   <br/>

   <label for="stressfulEvents">3. Have there been any recent stressful events or changes in your child's life that may be contributing to these symptoms?</label>
   <br/>
   <input type="text" id="stressfulEvents" name="stressfulEvents" required>
   <br/>
   <br/>
   <br/>

   <label for="toiletingHabits">4. Can you provide information on your child's toileting habits, such as any rituals, fears, or avoidance behaviors related to using the bathroom?</label>
   <br/>
   <input type="text" id="toiletingHabits" name="toiletingHabits" required>
   <br/>
   <br/>
   <br/>

   <label for="emotionalWellBeing">5. How is your child's overall emotional well-being, and have there been any changes in mood or behavior that coincide with the onset of these symptoms?</label>
   <br/>
   <input type="text" id="emotionalWellBeing" name="emotionalWellBeing" required>
   <br/>
   <br/>
   <br/>

   <label for="medicalConditions">6. Are there any physical symptoms or medical conditions that might be contributing to the elimination difficulties your child is facing?</label>
   <br/>
   <input type="text" id="medicalConditions" name="medicalConditions" required>
   <br/>
   <br/>
   <br/>

   <label for="familyEnvironment">7. Can you describe the family environment and any significant family stressors that might be impacting your child's behavior?</label>
   <br/>
   <input type="text" id="familyEnvironment" name="familyEnvironment" required><br/>

   <label for="copingChallenges">8. How is your child coping with the challenges related to elimination, both at home and in social or academic settings?</label>
   <br/>
   <input type="text" id="copingChallenges" name="copingChallenges" required>
   <br/>
   <br/>

   <button onclick="saveFormData('traumaForm')" type="submit" class="btn btn-primary">Save</button>

</form>

<form class="F_assess_forms" id="sleep_wakeForm">

  <p><b>Elimination Disorder</b><br>
       Elimination disorders all involve the inappropriate elimination of urine or feces and are usually first diagnosed in childhood or adolescence.
       This group of disorders includes enuresis, the repeated voiding of urine into inappropriate places, and encopresis, the repeated passage of feces into inappropriate places.
       </p>
   <label for="frequencyIntensity">1. Can you describe the frequency and intensity of the bowel or bladder symptoms your child is experiencing?</label></br>
   <input type="text" id="frequencyIntensity" name="frequencyIntensity" required>
  <br/>
  <br/>
  <br/>

   <label for="symptomOnset">2. When did you first notice these symptoms, and have they changed in severity over time?</label></br>
   <input type="text" id="symptomOnset" name="symptomOnset" required>
   <br/>
   <br/>
   <br/>

   <label for="stressfulEvents">3. Have there been any recent stressful events or changes in your child's life that may be contributing to these symptoms?</label>
   <br/>
   <input type="text" id="stressfulEvents" name="stressfulEvents" required>
   <br/>
   <br/>
   <br/>

   <label for="toiletingHabits">4. Can you provide information on your child's toileting habits, such as any rituals, fears, or avoidance behaviors related to using the bathroom?</label>
   <br/>
   <input type="text" id="toiletingHabits" name="toiletingHabits" required>
   <br/>
   <br/>
   <br/>

   <label for="emotionalWellBeing">5. How is your child's overall emotional well-being, and have there been any changes in mood or behavior that coincide with the onset of these symptoms?</label>
   <br/>
   <input type="text" id="emotionalWellBeing" name="emotionalWellBeing" required>
   <br/>
   <br/>
   <br/>

   <label for="medicalConditions">6. Are there any physical symptoms or medical conditions that might be contributing to the elimination difficulties your child is facing?</label>
   <br/>
   <input type="text" id="medicalConditions" name="medicalConditions" required>
   <br/>
   <br/>
   <br/>

   <label for="familyEnvironment">7. Can you describe the family environment and any significant family stressors that might be impacting your child's behavior?</label>
   <br/>
   <input type="text" id="familyEnvironment" name="familyEnvironment" required><br/>

   <label for="copingChallenges">8. How is your child coping with the challenges related to elimination, both at home and in social or academic settings?</label>
   <br/>
   <input type="text" id="copingChallenges" name="copingChallenges" required>
   <br/>
   <br/>

   <button onclick="saveFormData('traumaForm')" type="submit" class="btn btn-primary">Save</button>

</form>

</div>

<script>
    function showForm(disorder) {
        // Hide all forms
        document.querySelectorAll('form').forEach(form => {
            form.style.display = 'none';
        });

        // Show the selected form
        document.getElementById(`${disorder}Form`).style.display = 'block';
    }

    function saveFormData(formId) {
        // Validate the form fields (add more validation if needed)
        const inputField = document.getElementById(`${formId}`).querySelector('input');
        if (!inputField.checkValidity()) {
            alert('Please fill out the required field.');
            return;
        }

        // Save form data to local storage
        const formData = {
            [inputField.id]: inputField.value,
        };
        localStorage.setItem(formId, JSON.stringify(formData));

        // Optionally, you can reset the form after saving
        document.getElementById(formId).reset();

        alert('Form data saved successfully.');
    }
</script>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>


</body>
<?php
require_once "footer.php"
 ?> 

